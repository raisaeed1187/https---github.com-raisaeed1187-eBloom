@extends('admin.layouts.master')
@if (Session::get('adminStatus')=='2')
@section('title','Add Manager')
@else
@section('title','Add Florist')
@endif
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
         @if (Session::get('adminStatus')=='2')

          <h1>Add Manager</h1>
          @else
          <h1>Add Florist</h1>

          @endif
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
           <div class="col-sm-12">
              <div class="panel panel-bd lobidrag">
                 <div class="panel-heading">
                    <div class="btn-group" id="buttonlist"> 
                       <a class="btn btn-add " href="{{url('/admin/view-florists')}}"> 
                        @if (Session::get('adminStatus')=='2')
                        <i class="fa fa-eye"></i>  View Managers </a>  
                        
                        @else
                        <i class="fa fa-eye"></i>  View Florists </a>  
                        @endif
                    </div>
                 </div>
                 <div class="panel-body">
                 <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/add-florist')}}" method="post"> {{csrf_field()}}
                      
                       <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"  placeholder="Enter Name" name="name" id="name" required>
                     </div>
                       <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  placeholder="Enter Email" name="email" id="email" required>
                        </div>
                       <div class="form-group">
                          <label>Password</label>
                          <input type="text" class="form-control" placeholder="Enter Password" name="password" id="password" required>
                       </div>
                       <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
                       </div>
                       {{-- <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Enter Country" name="country" id="country" required>
                        </div> --}}
                        <div class="form-group">
                            <label>City</label>
                            {{-- <input type="text" class="form-control" placeholder="Enter City" name="city" id="city" required> --}}
                            <select name="city" id="" class="form-control" required>
                               {{-- <option value="">Select City</option> --}}
                               @foreach ($cities as $city)
                               <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                               @endforeach
                            </select>
                        </div>
                       
                        <div class="reset-button">
                           @if (Session::get('adminStatus')=='2')

                             <input type="submit" class="btn btn-success" value="Add Manager">
                           @else
                           <input type="submit" class="btn btn-success" value="Add Florist">

                           @endif
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