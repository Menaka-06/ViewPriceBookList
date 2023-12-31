<div class="container-fluid mt-4">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0"><?php echo $page_name;?></h4>

                <div class="page-title-right">
                    <?php //if($this->rbac->display_operation('materialcategory','addMaterialCategory')){?>
                    <a href="<?php echo base_url();?>salesdistribution/addpricebook"
                        class="btn btn-secondary  btn-sm btn-gradient waves-effect waves-light"><span><i
                                data-feather="plus"></i> Add Price Book</span></a>
                    <?php //} ?>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Search Price Book</h4>
                    <div class="flex-shrink-0">
                        <a href="<?php echo base_url();?>pricebook/listPriceBook" class="btn btn-dark btn-sm bg-gradient waves-effect waves-light text-uppercase"> <i data-feather="arrow-left"></i> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="live-preview">
                       
                            <div class="row gy-4">

                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div>
                                        <label for="price_book_code" class="form-label"> Price Book Name</label>
                                        <input type="text"  class="form-control" id="id"  name="price_book_name">
                                       </div>
                                       <span class="text-danger small" id="price_book_error"></span>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div>
                                        <label for="price_book_code" class="form-label"> Price Book Code</label>
                                        <input type="text" class="form-control" id="id" name="price_book_code">
                                          </div>
                                          <span class="text-danger small" id="price_book_error"></span>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div>
                                        <label for="price_book_code" class="form-label"> Description </label>
                                        <input type="text" class="form-control" id="id"  name="book_description" >
                                          </div>
                                          <span class="text-danger small" id="price_book_error"></span>
                                </div>
                                <div class="col-xxl-2 col-md-3">
                                <div>
                                    <label for="price_book_code" class="form-label "> CreatedAt</label>
                                    <input type="date" class="form-control" id="id" >
                                </div>
                            </div>

                                 
                               <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="price_book_code" class="form-label ">Status</label>
                                        <select  class="form-control" id="id"  name="price_book_status">
                                            <option value=" ">--Select Status--</option>
                                            <option value="1" >Active</option>
                                            <option value="0" >Inactive</option>
                                        </select>
                                        <span class="text-danger small" id="price_book_status_error"></span>
                                    </div>
                                </div>



                                <!-- 
                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div>
                                        <label for="dob" class="form-label">From Date</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="<?php echo set_value('dob'); ?>">
                                        <span class="text-danger small"
                                            id="dob_error"><?php echo form_error('dob'); ?></span>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div>
                                        <label for="dob" class="form-label">To Date</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="<?php echo set_value('dob'); ?>">
                                        <span class="text-danger small"
                                            id="dob_error"><?php echo form_error('dob'); ?></span>
                                    </div>
                                </div> -->
                                <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                    <div class="mt-4">
                                        <label for="category_name" class="form-label mt-3"></label>
                                        <button type="submit" class="btn btn-success btn-sm search_btn"
                                            name="search_material_category">Search</button>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">ProductPrice Details </h4>
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
                                    <table class="table table-hover align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>                            
                                                <th scope="col">Product Name</th>
                                                <th scope="col">MRP</th>
                                                <th scope="col">DP Price</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php if(!empty($price_booklist)) { foreach($price_booklist as $PBL)   {?>
                                            <tr>
                                                <td><?php if(!empty($PBL->id)){ echo $PBL->id; }?></td>
                                                                                     
                                               
                                                <td><?php if(!empty($PBL->productName)){ echo $PBL->productName; }?></td>
                                                <td><?php if(!empty($PBL->MRP)){ echo $PBL->MRP; }?>
                                                    
                                                </td>
                                                <td><?php if(!empty($PBL->DPPrice)){ echo $PBL->DPPrice; }?>
                                                    
                                                </td>
                                            </tr>
                                        <?php } }?>
                                        </tbody>
                                    </table>

                                    <nav class="mt-3 d-block">
                                        <?php echo $this->pagination->create_links(); ?>
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