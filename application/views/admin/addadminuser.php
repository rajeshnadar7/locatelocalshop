<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Admin User</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Admin User</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" name='addadminuser' id='addadminuser'>

                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Admin Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name='first_name' id="first_name" class="form-control" placeholder="First Name">
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text"  id="last_name" name='last_name' class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password"  id="password" name='password' class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label class="control-label">Password Confirm</label>
                                                    <input type="password"  id="password_conf" name='password_conf' class="form-control" placeholder="Password Confirm">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                      <input type="text"  id="mobile" name='mobile' class="form-control" placeholder="Mobile">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text"  id="email" name='email' class="form-control" placeholder="Email">
                                                    <small class="form-control-feedback"> Should be unique </small>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <!--/row-->
                                         
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" id='addsubmit' class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                                        <div class="alert alert-success" id="addsucessmsg" role="alert" style="display: none;">
                                             
                                        </div>
                                        <div class="alert alert-danger" role="alert" id="adderrormsg" style="display: none;">

                             
                                        </div>
                            </div>
                        </div>
                    </div>

 
                </div>
                <!-- Row -->
            
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        </div>