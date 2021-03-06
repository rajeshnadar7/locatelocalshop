
      <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shipment method</li>
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
                                                <th>Method name</th>
                                                <th>Payment Method Info</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Entity id</th>
                                                <th>Method name</th>
                                                <th>Payment Method Info</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                             if (count($shipmethod) && !empty($shipmethod)) {  
                                                
                                             foreach ($shipmethod as $shipmethodkey => $shipmethodvalue) { ?>
                                                    <tr>
                                                        <td><?php echo $shipmethodvalue['entity_id']; ?></td>
                                                        <td><?php echo $shipmethodvalue['method_name']; ?></td>
                                                        <td><?php echo $shipmethodvalue['shipment_method_info']; ?></td>   
                                                         <td><a href="<?php echo base_url().'backend/shipment/edit/'.$shipmethodvalue['entity_id'];  ?>" class="btn btn-info">Edit</a></td>
                                                            <td><a href="<?php echo base_url().'backend/shipment/delete/'.$shipmethodvalue['entity_id'];  ?>" class="btn btn-danger">Delete</a></td>                                     
                                                    </tr>
                                            <?php  } }else {?>
                                                    <tr>
                                                        <td colspan="12">No Payment method</td>
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
          
        </div=