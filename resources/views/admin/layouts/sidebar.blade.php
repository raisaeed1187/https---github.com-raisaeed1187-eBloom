         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                   <!-- sidebar menu -->
                   <ul class="sidebar-menu">
                      <li class="active">
                         <a href="{{url('/admin/dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                         <span class="pull-right-container">
                         </span>
                         </a>
                      </li>
                      @if (Session::get('adminSession')=='admin')
                                             
                      {{-- <li class="">
                        <a href="{{url('/admin/banners')}}"><i class="fa fa-image"></i><span>Banners</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li> --}}
                      {{-- <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Categories</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-category')}}">Add Category</a></li>
                        <li><a href="{{url('admin/view-categories')}}">View Categories</a></li>
                        </ul>
                      </li> --}}
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Categories</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-occasion')}}">Add Category</a></li>
                        <li><a href="{{url('admin/view-occasions')}}">View Categories</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Flower Types</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-type')}}">Add Type</a></li>
                        <li><a href="{{url('admin/view-types')}}">View Types</a></li>
                        </ul>
                      </li>
                      @endif
                      @if (Session::get('adminSession')!='admin')
                      <li class="treeview">
                         <a href="#">
                         <i class="fa fa-product-hunt"></i><span>Flowers</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url('admin/add-product')}}">Add Flower</a></li>
                         <li><a href="{{url('admin/view-products')}}">View Flowers</a></li>
                         </ul>
                      </li>
                      @endif
                     {{-- <li class="treeview">
                        <a href="#">
                        <i class="fa fa-gift"></i><span>Coupons</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-coupon')}}">Add Coupon</a></li>
                           <li><a href="{{url('admin/view-coupons')}}">View Coupons</a></li>
                        </ul>
                     </li>   --}}
                     @if (Session::get('adminStatus')=='1' || Session::get('adminStatus')=='2')
                     <li class="treeview">
                        <a href="#">
                        @if (Session::get('adminStatus')=='2')
                           <i class="fa fa-product-hunt"></i><span>Managers</span>
                        @else  
                        <i class="fa fa-product-hunt"></i><span>Florists</span>
                        @endif
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           @if (Session::get('adminStatus')=='2')
                           <li><a href="{{url('admin/add-florist')}}">Add Manager</a></li>
                           <li><a href="{{url('admin/view-florists')}}">View Managers</a></li>
                           
                           @else
                           <li><a href="{{url('admin/add-florist')}}">Add Florist</a></li>
                           <li><a href="{{url('admin/view-florists')}}">View Florists</a></li>
                           @endif
                        </ul>
                     </li>
                     @endif
                     @if (Session::get('adminStatus')=='1')
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-product-hunt"></i><span>Cities</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-city')}}">Add City</a></li>
                        <li><a href="{{url('admin/view-cities')}}">View Cities</a></li>
                        </ul>
                     </li>
                     {{-- <li class="treeview">
                        <a href="{{url('admin/orders')}}">
                        <i class="fa fa-shopping-bag"></i><span>Orders</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        
                     </li>                     --}}
                      @endif
                   </ul>
                </div>
                <!-- /.sidebar -->
             </aside>
             <!-- =============================================== -->