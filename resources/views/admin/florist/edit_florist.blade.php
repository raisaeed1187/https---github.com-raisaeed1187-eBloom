@extends('admin.layouts.master')
@section('title','Edit Florist')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit Florist</h1>
          <small>Edit Florist</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif
   
   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist"> 
                      <a class="btn btn-add " href="{{url('admin/view-florists')}}"> 
                      <i class="fa fa-eye"></i>  View Florists </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/edit-florist/'.$flurist->id)}}" method="post"> {{csrf_field()}}
                      <div class="form-group">
                         <label> Name</label>
                      <input type="text" class="form-control" value="{{$flurist->name}}" name="occasion_name" id="occasion_name" required>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  placeholder="Enter Email" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                           <label>Address</label>
                           <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
                        </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit Category">
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