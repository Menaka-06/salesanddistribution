<?php
class Saleinvoice_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->db2=$this->load->database('db2',true);
	}

	public function getDistributerBillingDetails($distributerId){
		$res= $this->db2->select('USR.id,USR.emailId,USR.mobileNo,USR.distributerId,USR.distributerName,UPA.doorNo as personaldoorno,UPA.street as personalStreet,UPA.address as personalAddress,UPA.landmark as personalLandmark,UPA.pincode as personalPincode, UPA.city as personalCity,UCA.doorNo as cDoorno,UCA.street as cStreet,UCA.address as caddress,UCA.landmark as cLandmark,UCA.pincode as cpincode,UCA.city as cCity,ST.name as pstatename,STC.name as cstatename')->from('users as USR')->join('user_personal_address as UPA','UPA.userId=USR.id')->join('user_communication_address as UCA','UCA.userId=USR.id')->join('states as ST','ST.id=UPA.state')->join('states as STC','STC.id=UCA.state')->where(array('USR.status'=>'Active','USR.distributerId'=>$distributerId))->get()->row();
		return $res;
	}

	public function getProductBasedOncustomer($customer_id){
		if(INVENTORY_MODE=='FIFO'){$type="ASC";}else{$type="DESC";}
		return $this->db->select('PRD.*,INV.branchBalance,INV.ControlNo,INV.BatchNo,INV.DateOfExpiry,PBL.MRP,PBL.DPPrice,PBL.BV')->from('tbl_inventory as INV')->join('tbl_products as PRD','PRD.id=INV.productId')->join('tbl_pricebook_list as PBL','PBL.productId=INV.productId')->join('tbl_pricebook as PB','PB.id=PBL.pricebookId')->where(array('INV.CustomerId'=>$customer_id,'PB.status'=>1,'INV.PendingQty >'=>0))->order_by('INV.id',$type)->group_by('INV.productId')->get()->result();
	}

	public function getAvailableqty($customer_id,$product_id){
		$qty=0;
		$resp=$this->db->select('branchBalance')->where(array('CustomerId'=>$customer_id,'productId'=>$product_id))->order_by('id','desc')->get('tbl_inventory')->row();
		if(!empty($resp)){$qty=$resp->branchBalance;}
		return $qty;
	}

	public function insertSaleInvoice($data){
		$this->db->insert('tbl_sale_invoice',$data);
		return $this->db->insert_id();
	}

	public function insertSaleInvoiceitem($data){
		return $this->db->insert('tbl_sale_invoice_item',$data);
	}

	public function insertSaleInvoiceData($data){
		return $this->db->insert('tbl_sale_invoice_details',$data);
	}

	public function GetSaleInvoiceList($limit,$start){
        $this->db->select('SI.*,SID.totalNetAmount,SID.totalBv')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
        $this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        return $this->db->get()->result();
    }

    public function getSaleInvoice($id){
    	return $this->db->where('id',$id)->get('tbl_sale_invoice')->row();
    }
    public function getSaleInvoiceItem($id){
    	return $this->db->where('saleInvoiceId',$id)->get('tbl_sale_invoice_item')->result();
    }
    public function getSaleInvoiceDetails($id){
    	return $this->db->where('saleInvoiceId',$id)->get('tbl_sale_invoice_details')->row();
    }

    public function updateSaleInvoice($id,$data){
    	return $this->db->where('id',$id)->set($data)->update('tbl_sale_invoice');
    }

    public function updateSaleInvoiceDetails($id,$data){
    	return $this->db->where('saleInvoiceId',$id)->set($data)->update('tbl_sale_invoice_details');
    }

    public function deleteSaleInvoiceItem($id){
    	return $this->db->where('saleInvoiceId',$id)->delete('tbl_sale_invoice_item');
    }

    public function getSaleInvoiceStatus($id){
    	$status="Draft";
    	$res=$this->db->where('id',$id)->get('tbl_sale_invoice')->row();
    	if(!empty($res)){$status=$res->status;}
    	return $status;
    }

    public function insertUserInvoiceBV($data){
    	return $this->db2->insert('user_invoice_bv_track',$data);
    }

    public function updatepersonalBV($user_id,$BV){
    	$oldbv=$this->getprevBV($user_id);
    	$newBV=$oldbv+$BV;
    	return $this->db2->where('userId',$user_id)->set(array('PBV'=>$newBV))->update('user_sponsor_details');
    }

    public function getprevBV($userId){
    	$bv=0;
    	$resp=$this->db2->where('userId',$userId)->get('user_sponsor_details')->row();
    	if(!empty($resp)){ $bv=$resp->PBV;}
    	return $bv; 
    }

    public function getCusCredit($customerID){
		$val=0;
		$resp=$this->db->where('customerId',$customerID)->get('tbl_ledger')->row();
		if(!empty($resp)){ $val=$resp->totalCredit;}
		return $val;
    }


    public function getCusDebit($customerID){
    	$val=0;
    	$resp=$this->db->where('customerId',$customerID)->get('tbl_ledger')->row();
		if(!empty($resp)){ $val=$resp->totalDebit;}
    	return $val;
    }

    public function insertLedger($data){
    	return $this->db->insert('tbl_ledger',$data);
    }

	public function GetSaleInvoiceListSearch($limit,$start){
        $this->db->select('SI.*,SID.totalNetAmount,SID.totalBv')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
        $this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        return $this->db->get()->result();
    }

	public function GetSaleInvoiceSearchList($limit,$start,$from_date,$to_date,$sale_inv_no,$stockist,$directseller_id,$directseller_status){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($sale_inv_no)){
			$this->db->where('SI.invoiceNum',$sale_inv_no);
		}
		if(!empty($stockist)){
			$this->db->where('SI.stockistId',$stockist);
		}
		if(!empty($directseller_id)){
			$this->db->where('SI.distributerId',$directseller_id);
		}
		if(!empty($directseller_status)){
			$this->db->where('SI.status',$directseller_status);
		}
       $this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function getSaleInvoicceSearchTotal($fromdate,$todate,$sale_inv_no,$stockist,$directseller_id,$directseller_status){
		$this->db->select('SI.*,sum(SID.totalNetAmount) as total_amount,sum(SID.totalBv) as total_bv')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($fromdate)){
			$this->db->where('SI.invoiceDate >=',$fromdate);
		}
		if(!empty($todate)){
			$this->db->where('SI.invoiceDate <=',$todate);
		}
		if(!empty($sale_inv_no)){
			$this->db->where('SI.invoiceNum',$sale_inv_no);
		}
		if(!empty($stockist)){
			$this->db->where('SI.stockistId',$stockist);
		}
		if(!empty($directseller_id)){
			$this->db->where('SI.distributerId',$directseller_id);
		}
		if(!empty($directseller_status)){
			$this->db->where('SI.status',$directseller_status);
		}
		//$this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->row();
		return $res;
	}

	public function getSaleInvoiceListReport($limit,$start,$from_date,$to_date,$stockist){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv,SID.productCount,SID.totalMRPAmount,SID.totalGrossAmount,SID.totalDiscountAmount,SID.totalTaxAmount')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.stockistId',$stockist);
		}
		$this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function salesInvoiceExcelDownload($from_date,$to_date,$stockist){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv,SID.productCount,SID.totalMRPAmount,SID.totalGrossAmount,SID.totalDiscountAmount,SID.totalTaxAmount')->from('tbl_sale_invoice as SI');
        $this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.stockistId',$stockist);
		}
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function salesInvoiceProductExcelDownload($from_date,$to_date,$stockist){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv')->from('tbl_sale_invoice as SI');
		$this->db->join('tbl_sale_invoice_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.stockistId',$stockist);
		}
		$this->db->where('SI.status','Delivered');
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function getProductInvoiceDetails($product_id,$invoice_id){
		if(empty($product_id) | empty($invoice_id)){
			return null;
		}
		$resp['quantity']=0;$resp['dpprice']=0;
		$res=$this->db->select('grossAmount,quantity')->where(array('saleInvoiceId'=>$invoice_id,'productId'=>$product_id))->get('tbl_sale_invoice_item')->row();
		if(!empty($res)){$resp['quantity']=$res->quantity;$resp['dpprice']=$res->grossAmount;}
		return $resp;
	}

	public function getB2BProductInvoiceDetails($product_id,$invoice_id){
		if(empty($product_id) | empty($invoice_id)){
			return null;
		}
		$resp['quantity']=0;$resp['dpprice']=0;
		$res=$this->db->select('grossAmount,quantity')->where(array('saleInvoiceId'=>$invoice_id,'productId'=>$product_id))->get('tbl_sales_invoice_stk_items')->row();
		if(!empty($res)){$resp['quantity']=$res->quantity;$resp['dpprice']=$res->grossAmount;}
		return $resp;
	}

	public function getB2bSaleInvoiceListReport($limit,$start,$from_date,$to_date,$stockist){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv,SID.productCount,SID.totalMRPAmount,SID.totalGrossAmount,SID.totalDiscountAmount,SID.totalTaxAmount')->from('tbl_sales_invoice_stk as SI');
        $this->db->join('tbl_sales_invoice_stk_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.fromCustomerId',$stockist);
		}
		$this->db->limit($limit,$start);
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function B2BsalesInvoiceProductExcelDownload($from_date,$to_date,$stockist){
		$this->db->select('SI.*,SID.totalNetAmount,SID.totalBv,SID.productCount,SID.totalMRPAmount,SID.totalGrossAmount,SID.totalDiscountAmount,SID.totalTaxAmount')->from('tbl_sales_invoice_stk as SI');
		$this->db->join('tbl_sales_invoice_stk_details as SID','SI.id=SID.saleInvoiceId');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.fromCustomerId',$stockist);
		}
		$this->db->where('SI.status','Delivered');
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function focProductExcelDownload($from_date,$to_date,$stockist){
		$this->db->select('SI.*')->from('tbl_foc as SI');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.fromCustomerId',$stockist);
		}
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function getProductFocDetails($product_id,$invoice_id){
		if(empty($product_id) | empty($invoice_id)){
			return null;
		}
		$resp['quantity']=0;$resp['dpprice']=0;
		$res=$this->db->select('grossAmount,quantity')->where(array('focId'=>$invoice_id,'productId'=>$product_id))->get('tbl_foc_items')->row();
		if(!empty($res)){$resp['quantity']=$res->quantity;$resp['dpprice']=$res->grossAmount;}
		return $resp;
	}

	public function b2bFocProductExcelDownload($from_date,$to_date,$stockist){
		$this->db->select('SI.*')->from('tbl_foc_stk as SI');
		if(!empty($from_date)){
			$this->db->where('SI.invoiceDate >=',$from_date);
		}
		if(!empty($to_date)){
			$this->db->where('SI.invoiceDate <=',$to_date);
		}
		if(!empty($stockist)){
			$this->db->where('SI.fromCustomerId',$stockist);
		}
        $this->db->order_by('SI.id','desc');
        $res=$this->db->get()->result();
		return $res;
	}

	public function getProductb2bFocDetails($product_id,$invoice_id){
		if(empty($product_id) | empty($invoice_id)){
			return null;
		}
		$resp['quantity']=0;$resp['dpprice']=0;
		$res=$this->db->select('grossAmount,quantity')->where(array('focId'=>$invoice_id,'productId'=>$product_id))->get('tbl_foc_stk_items')->row();
		if(!empty($res)){$resp['quantity']=$res->quantity;$resp['dpprice']=$res->grossAmount;}
		return $resp;
	}
	public function getCustomerState($id){
		$state_name="";
		$res=$this->db->select('ST.name')->from('tbl_customers as CUS')->join('tbl_states as ST','ST.id=CUS.state')->where('CUS.id',$id)->get()->row();
		if(!empty($res)){$state_name=$res->name;}
        return $state_name;
	}
}