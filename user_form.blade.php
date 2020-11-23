@extends('admin.layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">User</li>
          </ol>
        </section>
           
          

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <form role="form" enctype="multipart/form-data"  method="post" action="{{url('/admin/user_form')}}">
                  @csrf
                  <div class="box-body">
                      <div class="form-row">
                          <div class="form-group  col-md-6">
                             <label for="first_name">First Name</label>
                             <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                          </div>
                          <div class="form-group  col-md-6">
                             <label for="last_name">Last Name</label>
                             <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                          </div>
                       </div>

                       <div class="form-row">
                         <div class="form-group col-md-6">
                            <label for="mobile_no">Mobile no.</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no"placeholder="Enter Mobile Number">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"placeholder="Enter Email">
                          </div>
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group  col-md-6">
                             <label for="address">Address</label>
                             <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                          </div>
                          <div class="form-group  col-md-6">
                             <label for="city">City</label>
                             <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                          </div>  
                         
                          
                       </div>
                    
                       <div class="form-row">
                          <div class="form-group  col-md-6">
                             <label for="state">State</label>
                             <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
                           </div>
                           <div class="form-group  col-md-6">
                             <label for="country">Country</label>
                             <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
                          </div>
                                                
                       </div> 

                       <div class="form-row">
                          <div class="form-group  col-md-6">
                             <label for="password">Password</label>
                             <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                           </div>
                          <div class="form-group  col-md-6">
                             <label for="confirm_password">Confirm Password</label>
                             <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
                          </div>                         
                       </div>

                       <div class="form-row">
                          <div class="form-group  col-md-6">
                             <label for="zipcode">Zipcode</label>
                             <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zipcode">
                            </div>
                            <div class="form-group">
                            <label for="image">Select Image</label>
                            <input type="file" class="form-control-file" id="image" name="image"> 
                                                  
                       </div>                     
                  </div>   
                  
                <div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                  </div>
                  </div>
                </form> 
                
                
              </div><!-- /.box -->               
                                                      

                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



@endsection