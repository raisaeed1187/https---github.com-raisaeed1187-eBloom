@extends('admin.layouts.master')
@section('title','View Orders')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>View Orders</h1>
          <small>Orders</small>
       </div>
    </section>
    

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>View Orders</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                                <th>Order ID</th>
                                <th>Order Date</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Ordered Product</th>
                                <th>Order Amount</th>
                                <th>Order Status</th>
                                <th>Payment Method</th>
                                <th>Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{$order->name}}</td>
                                <td>{{ $order->user_email }}</td>
                                <td>
                                    @foreach ($order->orders as $pro)
                                        {{$pro->product_code}}
                                        {{$pro->product_qty}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>{{$order->grand_total}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_method}}</td>
                                <td class="center">
                                    <a href="{{url('/admin/order/'.$order->id)}}" target="_blank" class="btn btn-primary btn-sm">View Order Details</a><br><br>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection