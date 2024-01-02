<?php

class Salesdistribution extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->common_model->check_login();
        $this->load->model('saleinvoice_model');
    } 

    public function Products(){
        $data['page_name']='Products';
		$data['sub_page']='Salesdistribution/Products';
		$this->load->view('user_index',$data);
    }
    public function addProducts(){
        $data['page_name']='Add Products';
		$data['sub_page']='Salesdistribution/Addproducts';
		$this->load->view('user_index',$data);
    }
    
    public function schemeManagement(){
        $data['page_name']='Scheme Management';
		$data['sub_page']='Salesdistribution/Schememanagement';
		$this->load->view('user_index',$data);
    }
    public function addschemeManagement(){
        $data['page_name']='Add Scheme Management';
		$data['sub_page']='Salesdistribution/AddschemeManagement';
		$this->load->view('user_index',$data);
    }
    public function onlineSales(){
        $data['page_name']='Online Sales';
		$data['sub_page']='Salesdistribution/Onlinesales';
		$this->load->view('user_index',$data);
    }
    public function addonlineSales(){
        $data['page_name']='Add Online Sales';
		$data['sub_page']='Salesdistribution/AddonlineSales';
		$this->load->view('user_index',$data);
    }

    public function salesOrder(){
        $data['page_name']='Sales Order';
		$data['sub_page']='Salesdistribution/Salesorder';
		$this->load->view('user_index',$data);
    }
    public function addSalesOrder(){
        $data['page_name']='Add Sales Order';
		$data['sub_page']='Salesdistribution/AddsalesOrder';
		$this->load->view('user_index',$data);
    }
    public function salesInvoice(){
        $data['page_name']='Sales Invoice';
		$data['sub_page']='Salesdistribution/Salesinvoice';
		$this->load->view('user_index',$data);
    }
    public function addSalesInvoice(){
        $data['page_name']='Add Sales Invoice';
		$data['sub_page']='Salesdistribution/AddsalesInvoice';
		$this->load->view('user_index',$data);
    }
    public function creditsDebits(){
        $data['page_name']='Credits and Debits';
		$data['sub_page']='Salesdistribution/Creditsdebits';
		$this->load->view('user_index',$data);
    }
    public function AddcreditsDebits(){
        $data['page_name']='Add Credits Debits';
		$data['sub_page']='Salesdistribution/AddcreditsDebits';
		$this->load->view('user_index',$data);
    }
    public function salesReport(){
        $data['page_name']='Sales Report';
		$data['sub_page']='Salesdistribution/Salesreport';
		$this->load->view('user_index',$data);
    }
    public function salesSettings(){
        $data['page_name']='Sales Settings';
		$data['sub_page']='Salesdistribution/Salessettings';
		$this->load->view('user_index',$data);
    }
    public function MovementprDetails(){
        $data['page_name']='Movement PR Details';
		$data['sub_page']='Salesdistribution/MovementprDetails';
		$this->load->view('user_index',$data);
    }
    public function MovementprSummary(){
        $data['page_name']='Movement PR Summary';
		$data['sub_page']='Salesdistribution/MovementprSummary';
		$this->load->view('user_index',$data);
    }
    public function MovementtaxinvoiceDetails(){
        $data['page_name']='Movement Tax Invoice Details';
		$data['sub_page']='Salesdistribution/MovementtaxinvoiceDetails';
		$this->load->view('user_index',$data);
    }
    // public function OnlinesalesOrderReport(){
    //     $data['page_name']='Online sales Order';
	// 	$data['sub_page']='Salesdistribution/OnlinesalesOrder';
	// 	$this->load->view('user_index',$data);
    // }
   

    public function OnlinesalesOrder(){
        $data['page_name']='Online sales Order';
		$data['sub_page']='Salesdistribution/OnlinesalesOrder';
		$this->load->view('user_index',$data);
    }
    public function SalesOrderAssignedtostockist(){
        $data['page_name']='Sales Order Assigned To Stockist';
		$data['sub_page']='Salesdistribution/SalesOrderAssignedtostockist';
		$this->load->view('user_index',$data);
    }
    public function Proposal(){
        $data['page_name']='Proposal';
		$data['sub_page']='Salesdistribution/Proposal';
		$this->load->view('user_index',$data);
    }
    public function Salesquotation(){
        $data['page_name']='Sales Quotation';
		$data['sub_page']='Salesdistribution/Salesquotation';
		$this->load->view('user_index',$data);
    }
    public function Performainvoice(){
        $data['page_name']='Performa Invoice';
		$data['sub_page']='Salesdistribution/Performainvoice';
		$this->load->view('user_index',$data);
    }
    public function Salesreturn(){
        $data['page_name']='Sales Return';
		$data['sub_page']='Salesdistribution/Salesreturn';
		$this->load->view('user_index',$data);
    }
    public function Unitofmeasurement(){
        $data['page_name']='Unit Of Measurement';
		$data['sub_page']='Salesdistribution/Unitofmeasurement';
		$this->load->view('user_index',$data);
    }
    public function Productscategory(){
        $data['page_name']='Products Category';
		$data['sub_page']='Salesdistribution/Productscategory';
		$this->load->view('user_index',$data);
    }
    // ------
    public function Onlinesalesorderreport(){
        $data['page_name']='Online Sales Order report';
		$data['sub_page']='Salesdistribution/Onlinesalesorderreport';
		$this->load->view('user_index',$data);
    }
    public function Salesorderassigntostockistreport(){
        $data['page_name']='Sales Order assign to stockist report';
		$data['sub_page']='Salesdistribution/Salesorderassigntostockistreport';
		$this->load->view('user_index',$data);
    }
    public function Proposalreport(){
        $data['page_name']='Proposal report';
		$data['sub_page']='Salesdistribution/Proposalreport';
		$this->load->view('user_index',$data);
    }
    public function Salesquotationreport(){
        $data['page_name']='Sales Quotation report';
		$data['sub_page']='Salesdistribution/Salesquotationreport';
		$this->load->view('user_index',$data);
    }
    public function Performainvoicereport(){
        $data['page_name']='Performa invoice report';
		$data['sub_page']='Salesdistribution/Performainvoicereport';
		$this->load->view('user_index',$data);
    }
    public function Salesorderreport(){
        $data['page_name']='Sales Order report';
		$data['sub_page']='Salesdistribution/Salesorderreport';
		$this->load->view('user_index',$data);
    }

    public function b2bSalesinvoicereport(){
        $data['page_name']='B2B Sales Invoice report';
		$data['sub_page']='Salesdistribution/b2bSalesinvoicereport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function generateB2BInvoiceReport(){
        $date=$this->security->xss_clean($this->input->post('date'));
        $to_date=$this->security->xss_clean($this->input->post('to_date'));
        $stockist=$this->security->xss_clean($this->input->post('stockist'));
        if(empty($date) | empty($to_date) | empty($stockist)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/b2bSalesinvoicereport');
        }
        $config['base_url'] = base_url()."Salesdistribution/b2bSalesinvoicereport"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_sales_invoice_stk',array());
        $config['per_page'] = REPORT_PAGINATION_COUNT; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $lmt=mysqli_real_escape_string($this->db->conn_id,$lmt);
        $data['invoice_details']=$this->saleinvoice_model->getB2bSaleInvoiceListReport($config['per_page'],$lmt,$date,$to_date,$stockist);
        $data['page_name']='B2B Sales Invoice report';
        $data['sub_page']='Salesdistribution/b2bSalesinvoicereport';
        $data['customer']=$this->common_model->getActiveCustomer();
        $data['from_date']=$date;
        $data['to_date']=$to_date;
        $data['stockist']=$stockist;
        $this->load->view('user_index',$data);
    }

    public function downloadB2BExcelSalesInvoice(){
        $date=$this->security->xss_clean($this->input->post('search_from_date'));
        $to_date=$this->security->xss_clean($this->input->post('search_to_date'));
        $stockist=$this->security->xss_clean($this->input->post('search_stockist_id'));
        if(empty($date) | empty($to_date) | empty($stockist)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/b2bSalesinvoicereport');
        }
        $saleInvoiceList=$this->saleinvoice_model->B2BsalesInvoiceProductExcelDownload($date,$to_date,$stockist);
        if(empty($saleInvoiceList)){
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/b2bSalesinvoicereport');
        }
        if(!empty($saleInvoiceList)){
            foreach($saleInvoiceList as $INV){
                $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                $perBV['Sales Invoice Number']=$INV->saleInvoiceNum;
                $perBV['From Customer Name']=$INV->fromCustomerName;
                $perBV['From Customer Code']=trim($INV->fromCustomerCode);
                $perBV['To Customer Name']=trim($INV->toCustomerName);
                $perBV['To Customer Code']=trim($INV->toCustomerCode);
                $perBV['Tax Type']=trim($INV->TaxType);
                $perBV['Product Count']=trim($INV->productCount);
                $perBV['Total MRP Amount']=$INV->totalMRPAmount;
                $perBV['Total BV']=$INV->totalBv;
                $perBV['Total Gross Amount']=$INV->totalGrossAmount;
                $perBV['Total Discount Amount']=$INV->totalDiscountAmount;
                $perBV['Total Tax Amount']=$INV->totalTaxAmount;
                $perBV['Total Net Amount']=$INV->totalNetAmount;
                $perBV['Created Date']=date('d-m-Y h:i:s',strtotime($INV->createdAt));

                $per_ata[]=$perBV;
                
            }
            $data=$per_ata;
            $filename=$date.'-'.$to_date.'-'.$stockist."B2B-sales-invoice-report";
            $export=$this->common_model->ExcelExport($filename,$data);
        }
    }

    public function Salesinvoicereport(){
        $data['page_name']='Sales Invoice report';
		$data['sub_page']='Salesdistribution/Salesinvoicereport';
        $config['base_url'] = base_url()."salesdistribution/Salesinvoicereport";
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function generateInvoiceReport(){
        $from_date=$this->security->xss_clean($this->input->post('date'));
        $to_date=$this->security->xss_clean($this->input->post('to_date'));
        $stockist=$this->security->xss_clean($this->input->post('stockist'));
        if(empty($from_date) | empty($to_date) | empty($stockist)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/Salesinvoicereport');
        }
        $config['base_url'] = base_url()."Salesdistribution/Salesinvoicereport"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_sale_invoice',array());
        $config['per_page'] = PAGINATION_COUNT; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $lmt=mysqli_real_escape_string($this->db->conn_id,$lmt);
        $data['invoice_details']=$this->saleinvoice_model->getSaleInvoiceListReport($config['per_page'],$lmt,$from_date,$to_date,$stockist);
        $data['page_name']='Sales Invoice report';
        $data['sub_page']='Salesdistribution/Salesinvoicereport';
        $data['customer']=$this->common_model->getActiveCustomer();
        $data['date']=$from_date;
        $data['to_date']=$to_date;
        $data['stockist']=$stockist;
        $this->load->view('user_index',$data);
    }
    public function downloadExcelSalesInvoice(){
        $from_date=$this->security->xss_clean($this->input->post('search_from_date'));
        $to_date=$this->security->xss_clean($this->input->post('search_to_date'));
        $stockist=$this->security->xss_clean($this->input->post('search_stockist_id'));
        if(empty($from_date) | empty($to_date) | empty($stockist)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/Salesinvoicereport');
        }
        $saleInvoiceList=$this->saleinvoice_model->salesInvoiceExcelDownload($from_date,$to_date,$stockist);
        if(empty($saleInvoiceList)){
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/Salesinvoicereport');
        }
        if(!empty($saleInvoiceList)){
            foreach($saleInvoiceList as $INV){
                $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                $perBV['Sales Invoice Number']=$INV->invoiceNum;
                $perBV['Direct Seller ID']=$INV->distributerId;
                $perBV['Direct Seller Name']=$INV->distributerName;
                $perBV['Invoice Type']=$INV->invoiceType;
                $perBV['Bonus Month']=$INV->bonusMonth;
                $perBV['Stockist Name']=$INV->stockistName;
                $perBV['Stockist Code']=$INV->stockistCode;
                 $perBV['Status']=$INV->status;
                $perBV['Tax Type']=$INV->taxType;
                $perBV['Product Count']=$INV->productCount;
                $perBV['Total MRP Amount']=$INV->totalMRPAmount;
                $perBV['Total BV']=$INV->totalBv;
                $perBV['Total Gross Amount']=$INV->totalGrossAmount;
                $perBV['Total Discount Amount']=$INV->totalDiscountAmount;
                $perBV['Total Tax Amount']=$INV->totalTaxAmount;
                $perBV['Total Net Amount']=$INV->totalNetAmount;
                $perBV['Stockist State']=$this->saleinvoice_model->getCustomerState($INV->stockistId);
                $perBV['Status']=$INV->status;
                $perBV['Created Date']=date('d-m-Y h:i:s',strtotime($INV->createdAt));

                $per_ata[]=$perBV;
                
            }
            $data=$per_ata;
            $filename=$from_date.'-'.$to_date.'-'.$stockist."sales-invoice-report";
            $export=$this->common_model->ExcelExport($filename,$data);
        }
    }

    public function b2bFocReport(){
        $data['page_name']='B2B FOC report';
		$data['sub_page']='Salesdistribution/b2bfocreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function downloadB2BFocReport(){
        if(isset($_POST['sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist=$this->security->xss_clean($this->input->post('stockist'));
            if(empty($date) | empty($to_date) | empty($stockist)){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/b2bFocReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->b2bFocProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/b2bFocReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['FOC Number']=trim($INV->FOCNum);
                    $perBV['From Stockist Code']=trim($INV->fromCustomerCode);
                    $perBV['To Stockist Code']=trim($INV->toCustomerCode);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductb2bFocDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            // $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-".$stockist."-Product-wise-B2B-Foc-report";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/b2bFocReport');
        }
    }

    public function focReport(){
        $data['page_name']='FOC report';
		$data['sub_page']='Salesdistribution/focreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function downloadFocReport(){
        if(isset($_POST['sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist=$this->security->xss_clean($this->input->post('stockist'));
            if(empty($date) | empty($to_date) | empty($stockist)){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/focReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->focProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/focReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['FOC Number']=trim($INV->FOCNum);
                    $perBV['Stockist Code']=trim($INV->fromCustomerCode);
                    $perBV['Direct Seller Id']=trim($INV->DistributerCode);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductFocDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            // $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-".$stockist."-Product-wise-Foc-report";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/focReport');
        }
    }

    public function productWiseSaleReport(){
        $data['page_name']='Product Wise Sales report';
		$data['sub_page']='Salesdistribution/ProductWiseSalesreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function B2BproductWiseSaleReport(){
        $data['page_name']='B2B Product Wise Sales report';
		$data['sub_page']='Salesdistribution/B2bProductWiseSalesreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function productwiseSalesReportExcelDownload(){
        if(isset($_POST['product_sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist=$this->security->xss_clean($this->input->post('stockist'));
            if(empty($date) | empty($to_date) | empty($stockist)){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/productWiseSaleReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->salesInvoiceProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/productWiseSaleReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->invoiceNum);
                    $perBV['Stockist Code']=trim($INV->stockistCode);
                    $perBV['Direct Seller Id']=trim($INV->distributerId);
                    $perBV['Invoice Amount']=trim($INV->totalNetAmount);
                    $perBV['Total BV']=trim($INV->totalBv);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductInvoiceDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-".$stockist."-Product-wise-details";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/productWiseSaleReport');
        }
    }

    public function B2BproductwiseSalesReportExcelDownload(){
        if(isset($_POST['product_sales_invoice_report'])){  
            $from_date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist=$this->security->xss_clean($this->input->post('stockist'));
            if(empty($from_date) | empty($to_date) | empty($stockist)){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/B2BproductWiseSaleReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->B2BsalesInvoiceProductExcelDownload($from_date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/B2BproductWiseSaleReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['To Stockist Code']=trim($INV->toCustomerCode);
                    $perBV['To Stockist Name']=trim($INV->toCustomerName);
                    $perBV['Invoice Amount']=trim($INV->totalNetAmount);
                    $perBV['Total BV']=trim($INV->totalBv);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getB2BProductInvoiceDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-".$stockist."-B2B-Product-wise-details";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/B2BproductWiseSaleReport');
        }
    }

    public function Salescollectionreport(){
        $data['page_name']='Sales collection Report';
		$data['sub_page']='Salesdistribution/Salescollectionreport';
		$this->load->view('user_index',$data);
    }
    public function Salesinvoiceduereport(){
        $data['page_name']='Sales invoice due report';
		$data['sub_page']='Salesdistribution/Salesinvoiceduereport';
		$this->load->view('user_index',$data);
    }
    public function Salesreturnreport(){
        $data['page_name']='Sales return report';
		$data['sub_page']='Salesdistribution/Salesreturnreport';
		$this->load->view('user_index',$data);
    }
    public function Creditdebitnotereport(){
        $data['page_name']='Credit & Debit Note report';
		$data['sub_page']='Salesdistribution/Creditdebitnotereport';
		$this->load->view('user_index',$data);
    }
    public function Movementsalesreport(){
        $data['page_name']='Movement sales report';
		$data['sub_page']='Salesdistribution/Movementsalesreport';
		$this->load->view('user_index',$data);
    }
    public function Regionalsalesreport(){
        $data['page_name']='Regional sales report';
		$data['sub_page']='Salesdistribution/Regionalsalesreport';
		$this->load->view('user_index',$data);
    }
    public function Categoryproductbasedsalesreport(){
        $data['page_name']='Category | Product based sales report';
		$data['sub_page']='Salesdistribution/Categoryproductbasedsalesreport';
		$this->load->view('user_index',$data);
    }
    public function Pos(){
        $data['page_name']='Pos';
		$data['sub_page']='Salesdistribution/Pos';
		$this->load->view('user_index',$data);
    }
    public function Addproductscategory(){
        $data['page_name']='Add Products Category';
		$data['sub_page']='Salesdistribution/Addproductscategory';
		$this->load->view('user_index',$data);
    }
    public function Addperformainvoice(){
        $data['page_name']='Add performa invoice';
		$data['sub_page']='Salesdistribution/Addperformainvoice';
		$this->load->view('user_index',$data);
    }
    public function Addsalesreturnnote(){
        $data['page_name']='Add salesreturn note';
		$data['sub_page']='Salesdistribution/Addsalesreturnnote';
		$this->load->view('user_index',$data);
    }

    public function OverallSalesInvoiceReport(){
        $data['page_name']='Overall Sales Invoice Report';
		$data['sub_page']='Salesdistribution/overallSalesInvoiceReport';
		$this->load->view('user_index',$data);
    }

    public function generateOverallInvoiceReport(){
        $date=$this->security->xss_clean($this->input->post('date'));
        $to_date=$this->security->xss_clean($this->input->post('to_date'));
        $stockist="";
        if(empty($date) | empty($to_date) ){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/OverallSalesInvoiceReport');
        }
        $config['base_url'] = base_url()."salesdistribution/OverallSalesInvoiceReport"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_sale_invoice',array());
        $config['per_page'] = REPORT_PAGINATION_COUNT; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $lmt=mysqli_real_escape_string($this->db->conn_id,$lmt);
        $data['invoice_details']=$this->saleinvoice_model->getSaleInvoiceListReport($config['per_page'],$lmt,$date,$to_date,$stockist);
        $data['page_name']='Overall Sales Invoice report';
        $data['sub_page']='Salesdistribution/overallSalesInvoiceReport';
        $data['customer']=$this->common_model->getActiveCustomer();
        $data['from_date']=$date;
        $data['to_date']=$to_date;
        $data['stockist']=$stockist;
        $this->load->view('user_index',$data);
    }

    public function downloadExcelOverallSalesInvoice(){
        $date=$this->security->xss_clean($this->input->post('search_from_date'));
        $to_date=$this->security->xss_clean($this->input->post('search_to_date'));
        $stockist="";
        if(empty($date) | empty($to_date)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/OverallSalesInvoiceReport');
        }
        $saleInvoiceList=$this->saleinvoice_model->salesInvoiceExcelDownload($date,$to_date,$stockist);
        if(empty($saleInvoiceList)){
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/OverallSalesInvoiceReport');
        }
        if(!empty($saleInvoiceList)){
            foreach($saleInvoiceList as $INV){
                $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                $perBV['Sales Invoice Number']=$INV->invoiceNum;
                $perBV['Direct Seller ID']=$INV->distributerId;
                $perBV['Direct Seller Name']=$INV->distributerName;
                $perBV['Invoice Type']=$INV->invoiceType;
                $perBV['Bonus Month']=$INV->bonusMonth;
                $perBV['Stockist Name']=$INV->stockistName;
                $perBV['Stockist Code']=$INV->stockistCode;
                $perBV['Tax Type']=$INV->taxType;
                $perBV['Product Count']=$INV->productCount;
                $perBV['Total MRP Amount']=$INV->totalMRPAmount;
                $perBV['Total BV']=$INV->totalBv;
                $perBV['Total Gross Amount']=$INV->totalGrossAmount;
                $perBV['Total Discount Amount']=$INV->totalDiscountAmount;
                $perBV['Total Tax Amount']=$INV->totalTaxAmount;
                $perBV['Total Net Amount']=$INV->totalNetAmount;
                $perBV['Stockist State']=$this->saleinvoice_model->getCustomerState($INV->stockistId);
                $perBV['Status']=$INV->status;
                $perBV['Created Date']=date('d-m-Y h:i:s',strtotime($INV->createdAt));

                $per_ata[]=$perBV;
                
            }
            $data=$per_ata;
            $filename=$date.'-'.$to_date.'-'.$stockist."Overall-sales-invoice-report";
            $export=$this->common_model->ExcelExport($filename,$data);
        }
    }

    public function OverallB2bSalesReport(){
        $data['page_name']='Overall B2B Sales Report';
		$data['sub_page']='Salesdistribution/overallB2BSalesReport';
		$this->load->view('user_index',$data);
    }
    public function generateOverallB2BInvoiceReport(){
        $date=$this->security->xss_clean($this->input->post('date'));
        $to_date=$this->security->xss_clean($this->input->post('to_date'));
        $stockist="";
        if(empty($date) | empty($to_date)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/OverallB2bSalesReport');
        }
        $config['base_url'] = base_url()."Salesdistribution/OverallB2bSalesReport"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_sales_invoice_stk',array());
        $config['per_page'] = REPORT_PAGINATION_COUNT; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $lmt=mysqli_real_escape_string($this->db->conn_id,$lmt);
        $data['invoice_details']=$this->saleinvoice_model->getB2bSaleInvoiceListReport($config['per_page'],$lmt,$date,$to_date,$stockist);
        $data['page_name']='Overall B2B Sales Invoice report';
        $data['sub_page']='Salesdistribution/overallB2BSalesReport';
        $data['customer']=$this->common_model->getActiveCustomer();
        $data['from_date']=$date;
        $data['to_date']=$to_date;
        $data['stockist']=$stockist;
        $this->load->view('user_index',$data);
    }

    public function downloadOverallB2BExcelSalesInvoice(){
        $date=$this->security->xss_clean($this->input->post('search_from_date'));
        $to_date=$this->security->xss_clean($this->input->post('search_to_date'));
        $stockist="";
        if(empty($date) | empty($to_date)){
            $this->session->set_flashdata('warning', 'Some fields are empty');
            redirect(base_url().'Salesdistribution/OverallB2bSalesReport');
        }
        $saleInvoiceList=$this->saleinvoice_model->B2BsalesInvoiceProductExcelDownload($date,$to_date,$stockist);
        if(empty($saleInvoiceList)){
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/OverallB2bSalesReport');
        }
        if(!empty($saleInvoiceList)){
            foreach($saleInvoiceList as $INV){
                $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                $perBV['Sales Invoice Number']=$INV->saleInvoiceNum;
                $perBV['From Customer Name']=$INV->fromCustomerName;
                $perBV['From Customer Code']=trim($INV->fromCustomerCode);
                $perBV['To Customer Name']=trim($INV->toCustomerName);
                $perBV['To Customer Code']=trim($INV->toCustomerCode);
                $perBV['Tax Type']=trim($INV->TaxType);
                $perBV['Product Count']=trim($INV->productCount);
                $perBV['Total MRP Amount']=$INV->totalMRPAmount;
                $perBV['Total BV']=$INV->totalBv;
                $perBV['Total Gross Amount']=$INV->totalGrossAmount;
                $perBV['Total Discount Amount']=$INV->totalDiscountAmount;
                $perBV['Total Tax Amount']=$INV->totalTaxAmount;
                $perBV['Total Net Amount']=$INV->totalNetAmount;
                $perBV['Created Date']=date('d-m-Y h:i:s',strtotime($INV->createdAt));

                $per_ata[]=$perBV;
                
            }
            $data=$per_ata;
            $filename=$date.'-'.$to_date.'-'.$stockist."Overal-B2B-sales-invoice-report";
            $export=$this->common_model->ExcelExport($filename,$data);
        }
    }

    public function OverallFocReport(){
        $data['page_name']='Overall FOC Report';
		$data['sub_page']='Salesdistribution/overallFocReport';
		$this->load->view('user_index',$data);
    }

    public function downloadOverallFocReport(){
        if(isset($_POST['sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist="";
            if(empty($date) | empty($to_date) ){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/OverallFocReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->focProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/OverallFocReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['FOC Number']=trim($INV->FOCNum);
                    $perBV['Stockist Code']=trim($INV->fromCustomerCode);
                    $perBV['Direct Seller Id']=trim($INV->DistributerCode);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductFocDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            // $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-Overall-Product-wise-Foc-report";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/OverallFocReport');
        }
    }


    public function OverallB2BFocReport(){
        $data['page_name']='Overall B2B FOC Report';
		$data['sub_page']='Salesdistribution/overallB2BFocReport';
		$this->load->view('user_index',$data);
    }

    public function downloadOverallB2BFocReport(){
        if(isset($_POST['sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist="";
            if(empty($date) | empty($to_date) ){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/b2bFocReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->b2bFocProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/b2bFocReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['FOC Number']=trim($INV->FOCNum);
                    $perBV['From Stockist Code']=trim($INV->fromCustomerCode);
                    $perBV['To Stockist Code']=trim($INV->toCustomerCode);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductb2bFocDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            // $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-Overall-Product-wise-B2B-Foc-report";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/b2bFocReport');
        }
    }

    public function overallProductWiseSaleReport(){
        $data['page_name']='Overall Product Wise Sales report';
		$data['sub_page']='Salesdistribution/overallProductWiseSalesreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function overallB2BproductWiseSaleReport(){
        $data['page_name']='Overall B2B Product Wise Sales report';
		$data['sub_page']='Salesdistribution/overallB2bProductWiseSalesreport';
        $data['customer']=$this->common_model->getActiveCustomer();
		$this->load->view('user_index',$data);
    }

    public function overallProductwiseSalesReportExcelDownload(){
        if(isset($_POST['product_sales_invoice_report'])){
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist="";
            if(empty($date) | empty($to_date) ){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/overallProductWiseSaleReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->salesInvoiceProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/overallProductWiseSaleReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->invoiceNum);
                    $perBV['Stockist Code']=trim($INV->stockistCode);
                    $perBV['Direct Seller Id']=trim($INV->distributerId);
                    $perBV['Invoice Amount']=trim($INV->totalNetAmount);
                    $perBV['Total BV']=trim($INV->totalBv);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getProductInvoiceDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-Overall-Product-wise-details";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/overallProductWiseSaleReport');
        }
    }

    public function overallB2BproductwiseSalesReportExcelDownload(){
        if(isset($_POST['product_sales_invoice_report'])){  
            $date=$this->security->xss_clean($this->input->post('date'));
            $to_date=$this->security->xss_clean($this->input->post('to_date'));
            $stockist="";
            if(empty($date) | empty($to_date)){
                $this->session->set_flashdata('warning', 'Some fields are empty');
                redirect(base_url().'Salesdistribution/overallB2BproductWiseSaleReport');
            }
            $saleInvoiceList=$this->saleinvoice_model->B2BsalesInvoiceProductExcelDownload($date,$to_date,$stockist);
            $products=$this->common_model->getAllActiveProducts();
            if(empty($saleInvoiceList)){
                $this->session->set_flashdata('warning', 'No Data To Display');
                redirect(base_url().'Salesdistribution/overallB2BproductWiseSaleReport');
            }
            if(!empty($saleInvoiceList)){
                foreach($saleInvoiceList as $INV){
                    $perBV['Sales Invoice Date']=date('d-m-Y',strtotime($INV->invoiceDate));
                    $perBV['Sales Invoice Number']=trim($INV->saleInvoiceNum);
                    $perBV['To Stockist Code']=trim($INV->toCustomerCode);
                    $perBV['To Stockist Name']=trim($INV->toCustomerName);
                    $perBV['Invoice Amount']=trim($INV->totalNetAmount);
                    $perBV['Total BV']=trim($INV->totalBv);
                    foreach($products as $prd){
                        $getProductInvoiceDetails=$this->saleinvoice_model->getB2BProductInvoiceDetails($prd->id,$INV->id);
                        if(!empty($getProductInvoiceDetails)){
                            $perBV[trim($prd->Sku)]=trim($getProductInvoiceDetails['quantity']);
                            $perBV['DP Value -'.trim($prd->Sku)]=trim($getProductInvoiceDetails['dpprice']);
                        }
                    }
                    $per_ata[]=$perBV;
                }

                $data=$per_ata;
                $filename=$date."-".$to_date."-Overall-B2B-Product-wise-details";
                $export=$this->common_model->ExcelExport($filename,$data);
            }
        }else{
            $this->session->set_flashdata('warning','No data To Display');
            redirect(base_url().'Salesdistribution/overallB2BproductWiseSaleReport');
        }
    }
}