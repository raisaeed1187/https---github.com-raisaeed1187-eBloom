@extends('admin.layouts.master')
@section('title','Edit Category')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit Category</h1>
          <small>Edit Category</small>
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
                      <a class="btn btn-add " href="{{url('admin/add-category')}}"> 
                      <i class="fa fa-eye"></i>  Add Category </a>  
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/edit-parent-category/'.$categoryDetails->id)}}" method="post"> {{csrf_field()}}
                      <div class="form-group">
                         <label>Category Name</label>
                      <input type="text" class="form-control" value="{{$categoryDetails->name}}" name="category_name" id="category_name" required>
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