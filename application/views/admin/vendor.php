
      <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Vendor</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                             <tr>
                                                <th>Entity id</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Display name</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Pincode</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Category</th>
                                                <th>Created at</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Entity id</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Display name</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Pincode</th>
                                                <th>City</th>
                                                <th>State</th>
                                                 <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                             if (count($vendor)) {   
                                                
                                             foreach ($vendor as $vendorkey => $vendorvalue) { ?>
                                                    <tr>
                                                        <td><?php echo $vendorvalue['entity_id']; ?></td>
                                                        <td><?php echo $vendorvalue['first_name']; ?></td>
                                                        <td><?php echo $vendorvalue['last_name']; ?></td>
                                                        <td><?php echo $vendorvalue['email']; ?></td>
                                                        <td><?php echo $vendorvalue['mobile']; ?></td>
                                                        <td><?php echo $vendorvalue['display_name']; ?></td>
                                                        <td><?php echo $vendorvalue['address_1']; ?></td>    
                                                        <td><?php echo $vendorvalue['address_2']; ?></td>  
                                                        <td><?php echo $vendorvalue['pincode']; ?></td>  
                                                        <td><?php echo $vendorvalue['city']; ?></td> 
                                                        <td><?php echo $vendorvalue['state']; ?></td> 
                                                        <td><?php echo $vendorvalue['category']; ?></td>
                                                        <td><?php echo $vendorvalue['created_at']; ?></td>     
                                                         <td><a href="<?php echo base_url().'backend/vendor/edit/'.$vendorvalue['entity_id'];  ?>" class="btn btn-info">Edit</a></td>
                                                            <td><a href="<?php echo base_url().'backend/vendor/delete/'.$vendorvalue['entity_id'];  ?>" class="btn btn-danger">Delete</a></td>                                   
                                                    </tr>
                                            <?php  } }else {?>
                                                    <tr>
                                                        <td colspan="12">No Vendor</td>
                                                    </tr>
                                            <?php }?>
                                                
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
          
        </div