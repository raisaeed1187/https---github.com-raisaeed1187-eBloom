@extends('admin.layouts.master')
@section('title','User Profile')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>User Profile</h1>
       </div>
    </section>
    
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    

    <!-- Main content -->
    <section class="content">
        <div class="row">
           <!-- Form controls -->
           <div class="col-sm-6">
              <div class="panel panel-bd lobidrag">
                 <div class="panel-heading">
                    <div class="btn-group" id="buttonlist"> 
                       <a class="btn btn-add " href="{{url('/admin/view-products')}}"> 
                       <i class="fa fa-eye"></i>  View Products </a>  
                    </div>
                 </div>
                 <div class="panel-body">
                 <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/florist-profile')}}" method="post"> {{csrf_field()}}
                      
                    {{-- <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="{{$userDetails->user_name}}"  placeholder="Enter Username" name="username" id="username" required>
                     </div> --}}
                     <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" value="{{$userDetails->name}}" placeholder="Enter Name" name="name" id="name" required>
                     </div>
                     <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" value="{{$userDetails->email}}"  placeholder="Enter Email" name="email" id="email" required>
                      </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="{{$userDetails->address}}" placeholder="Enter Address" name="address" id="address" required>
                     </div>
                      {{-- <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" value="{{$userDetails->country}}" placeholder="Enter Country" name="country" id="country" required>
                      </div> --}}
                      <div class="form-group">
                          <label>City</label>
                          <input type="text" class="form-control" value="{{$userDetails->city}}" placeholder="Enter City" name="city" id="city" required>
                      </div>
                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                      <input type="hidden" name="current_image" value="{{$userDetails->image}}">
                      @if(!empty($userDetails->image))
                        <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$userDetails->image)}}"> 
                      @endif 

                     </div>
                       
                       <div class="reset-button">
                          <input type="submit" class="btn btn-success" value="Update Profile">
                       </div>
                    </form>
                 </div>
              </div>
           </div>
           <div class="col-sm-6">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  {{-- <div class="btn-group" id="buttonlist"> 
                     <a class="btn btn-add " href="{{url('/admin/admin-profile')}}"> 
                     <i class="fa fa-eye"></i>  View Products </a>  
                  </div> --}}
               </div>
               <div class="panel-body">
               <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/change-password')}}" method="post"> {{csrf_field()}}
                    
                     
                     <div class="form-group">
                        <label>Current Password</label>
                        <input type="text" class="form-control" placeholder="Enter Current Password" name="current_pwd" id="current_pwd" required>
                     </div>
                     <div class="form-group">
                        <label>New Password</label>
                        <input type="text" class="form-control" placeholder="Enter New Password" name="new_pwd" id="new_pwd" required>
                     </div>
                     
                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="Change Password">
                     </div>
                  </form>
               </div>
            </div>
         </div>
        </div>
     </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection