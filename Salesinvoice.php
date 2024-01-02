<?php $method=""; $method=$this->router->fetch_method(); ?> 
<div class="container-fluid" style="max-width:100%">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0"><?php echo $page_name;?></h4>

                <div class="page-title-right">
                    <?php //if($this->rbac->display_operation('materialcategory','addMaterialCategory')){?>
                    <!-- <a href="<?php echo base_url();?>saleinvoice/addsalesinvoice"
                        class="btn btn-secondary  btn-sm btn-gradient waves-effect waves-light"><span><i
                                data-feather="plus"></i> Add Sales Invoice</span></a> -->
                    <?php //} ?>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <form method="post" action="<?php echo base_url();?>saleinvoice/searchSaleInvoice" onSubmit="return ValidateEmployee();" >
                    <div class="row gy-4">
                        <div class="col-xl-12 searchflx">
                            <div>
                                <label for="fromdate" class="form-label ">From Date</label>
                                <input type="date" class="form-control" id="fromdate" name="fromdate" value="<?php if(isset($from_date)){ 
                                    if(!empty($from_date)){ 
                                        echo date('Y-m-d',strtotime($from_date));}} ?>">
                                        
                                <span class="text-danger small" id="fromdate_error" ></span>
                            </div>
                            <div>
                                <label for="todate" class="form-label ">To Date</label>
                                <input type="date" class="form-control" id="todate" name="todate" value="<?php if(isset($to_date)){ if(!empty($to_date)){ echo date('Y-m-d',strtotime($to_date));}}?>">
                                <span class="text-danger small" id="todate_error"></span>
                            </div>


                            <div>
                                <label for="sale_inv_no" class="form-label "> sales Invoice Number</label>
                                <input type="text" class="form-control" id="sale_inv_no" name="sale_inv_no" value="<?php if(isset($sale_inv_no)){ if(!empty($sale_inv_no)){ echo $sale_inv_no;}}?>">
                                <span class="text-danger small" id="sale_inv_no_error"></span>
                            </div>

                            
                            <div>
                                <label for="stockist" class="form-label">Stockist</label>
                                <select class="form-control" name="stockist" id="stockist">
                                    <option value="">Select Stockist</option>
                                    <?php if(!empty($stockist)){ foreach($stockist as $stk){?>
                                        <option value="<?php echo $stk->id;?>" <?php if(isset($ssstockist)){ if($ssstockist==$stk->id){ echo 'selected';}}?>><?php echo $stk->CustomerName;?>-<?php echo $stk->CustomerCode;?></option>
                                        <?php } } ?>
                                    
                                </select>
                                <span class="text-danger small" id="stockist_error"></span>
                                </div>

                            <div>
                                <label for="directseller_id" class="form-label">Directseller</label>
                                <input type="text" class="form-control" name="directseller_id" id="directseller_id" value="<?php if(isset($directseller_id)){ if(!empty($directseller_id)){ echo $directseller_id;}}?>">
                                <span class="text-danger small" id="directseller_id_error"></span>
                                <p class="text-center text-danger ft10" id="directseller_id_msg"></p>
                            </div>
                            <div>
                                <label for="directseller_status" class="form-label">Status</label>
                                <select class="form-control" name="directseller_status" id="directseller_status">
                                    <option value="">Select Status</option>
                                    <option value="Draft" <?php if(isset($directseller_status)){ if($directseller_status=='Draft'){ echo 'selected';}}?>>Draft</option>
                                    <option value="Delivered" <?php if(isset($directseller_status)){ if($directseller_status=='Delivered'){ echo 'selected';}}?>>Delivered</option>
                                    <option value="Approved" <?php if(isset($directseller_status)){ if($directseller_status=='Approved'){ echo 'selected';}}?> >Approved</option>
                                    <option value="Cancelled" <?php if(isset($directseller_status)){ if($directseller_status=='Cancelled'){ echo 'selected';}}?>>Cancelled</option>
                                </select>
                                <span class="text-danger small" id="directseller_status_error"></span>
                            </div>



                            <div class="mt-4">
                                <button type="submit" title="Search" class="btn btn-success btn-sm search_btnsmall"
                                    name="search_direct_seller" id="search_direct_seller"><i class="ri-search-2-line"></i></button>

                            </div>
                        </div>

                    </div>
                    <?php if($method=="searchSaleInvoice"){ ?>
                    <div class="row gy-4 mt-1">
                        
                        <div class="col-xs-12 searchflx">
                            <div>
                                <label class="form-label">Total Invoices : <?php if(!empty($total_count)){ echo $total_count;}else{echo "no invoices";} ?></label>
                            </div>
                            <div>
                                <label class="form-label">Total Amount : <?php if(!empty($total_amount)){ echo $total_amount;}else{echo "no amount";} ?></label>
                            </div>
                            <div>
                                <label class="form-label">Total BV :  <?php if(!empty($total_total_bv)){ echo $total_total_bv;} else{echo "no bv";}?></label>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                </form>
            </div>
             
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><?php echo $page_name;?> Details</h4>
                    <div class="flex-shrink-0 d-none">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="hover-rows-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="hover-rows-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <input type="hidden" name="last_table_count" id="last_table_count" value="">
                                    <table class="table table-hover align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Sales Invoice Date</th>
                                                <th scope="col">Sales Invoice Number</th>
                                                <th scope="col">Stockist</th>
                                                <th scope="col">Direct Seller ID</th>
                                                <th scope="col">Bonus Month</th>
                                                <th scope="col">Total Amount </th>
                                                <th scope="col">Total BV</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                               
                                                
                                             if(!empty($sale_invoice)){ foreach($sale_invoice as $k){ $lmt++;?>
                                            <tr>
                                                <td><?php echo $lmt;?></td>
                                                <td><?php if(!empty($k->invoiceDate)){ echo $k->invoiceDate;}?>
                                                
                                                </td>
                                                <td><?php if(!empty($k->invoiceNum)){ echo $k->invoiceNum;}?></td>
                                                <td><?php if(!empty($k->stockistName)){ echo $k->stockistName;}?></td>
                                                <td><?php if(!empty($k->distributerId)){ echo $k->distributerId;}?></td>
                                                <td><?php if(!empty($k->bonusMonth)){ /*echo date('F-Y',strtotime($k->bonusMonth));*/ echo $k->bonusMonth; }?></td>
                                                <td><?php if(!empty($k->totalNetAmount)){ echo $k->totalNetAmount;}?></td>
                                                <td><?php if(!empty($k->totalBv)){ echo $k->totalBv;}?></td>
                                                <td><?php if(!empty($k->status)){ echo $k->status;}?></td>
                                                <td>
                                                    <?php if($this->rbac->display_operation('materialcategory','viewMaterialCategory')){?>
                                                    <a
                                                        href="<?php echo base_url();?>saleinvoice/viewSaleInvoice/<?php echo $this->common_model->encode($k->id);?>"><i
                                                            class="ri-eye-fill fs-17 lh-1 align-middle"></i></a>
                                                    <?php } ?>
                                                    <?php if($this->rbac->display_operation('materialcategory','editMaterialCategory')){?>
                                                    <a
                                                        href="<?php echo base_url();?>saleinvoice/editSaleInvoice/<?php echo $this->common_model->encode($k->id);?>"><i
                                                            class="ri-pencil-fill fs-17 lh-1 align-middle"></i></a>
                                                    <?php } ?>
                                                    <?php if($this->rbac->display_operation('materialcategory','deleteMaterialCategory')){?>
                                                     <a href="<?php echo base_url();?>saleinvoice/printSaleInvoice/<?php echo $this->common_model->encode($k->id);?>"><i
                                                            class="ri-printer-line fs-17 lh-1 align-middle"></i></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php } } else{ ?>
                                            <tr>
                                                <td align="center" colspan="9">No Records Found</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                    <nav class="mt-3 d-block">
                                        <?php echo $this->pagination->create_links();
                                         ?>
                                    </nav>
                                    
                                </div>
                            </div>

                            <!--end col-->

                        </div>
                        <!--end row-->
                    </div>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>

</div>
<!-- container-fluid -->
<script>
    $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });

  });
</script>