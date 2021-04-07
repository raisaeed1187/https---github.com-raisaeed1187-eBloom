<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewOrder;
use Image;
use App\Products;
use App\Category;
use App\ProductsAttributes;
use App\ProductsImages;
use App\Coupons;
use App\Occasion;
use App\Type;
use App\Florist;

use DB;
use Session;
use Auth;
use App\User;
use App\DeliveryAddress;
use App\Orders;
use App\OrdersProduct;
class ProductsController extends Controller
{
    public function addProduct(Request $request){

        if($request->ismethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $product = new Products;
            // $product->category_id = $data['category_id'];
            $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
    		// dd($florist->id);
            $product->occasion_id = $data['occasion_id'];
            $product->type_id = $data['type_id'];
            $product->name = $data['product_name'];
            $product->code = $data['product_code'];
            $product->company = $data['product_company'];
            $product->slug = str_slug($data['product_name']);
            $product->florist_id = $florist->id;
            // dd($product->florist_id);
            if(!empty($data['product_description'])){
                $product->description = $data['product_description'];

            }else{
                $product->description = '';
            }
            $product->price = $data['product_price'];

            //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $product->image = $filename;
            }
            }
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success','Product has been added successfully!!');

        } 
        //Categories Dropdown menu Code
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown .="<option value='".$sub_cat->id."'>&nbsp;--&nbsp".$sub_cat->name."</option>";

            }
        }
        //Occasion Dropdown menu Code
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($occasions as $cat){
            $occasions_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
           
        }
        //Flower type Dropdown menu Code
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($types as $cat){
            $types_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
           
        }
        return view('admin.products.add_product')->with(compact('categories_dropdown','occasions_dropdown','types_dropdown'));
    }
    public function viewProducts(){
        $products = null;
        if (Session::get('adminSession')=='admin') {
            $products = Products::get();
        }else{
            $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
            // dd($florist->id);
            $products = Products::where(['florist_id'=>$florist->id])->get();
            // dd($products);
            // $products = Products::get();
        }
        $types = Type::get();

        return view('admin.products.view_products')->with(compact('products','types'));
    }
    public function editProduct(Request $request,$id=null){
        if($request->isMethod('post')){
             $data = $request->all();
             //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

            }
            }else{
                $filename = $data['current_image'];
            }
            if(empty($data['product_description'])){
                $data['product_description'] = '';
            }
            Products::where(['id'=>$id])->update(['name'=>$data['product_name'],
            'occasion_id'=>$data['occasion_id'],'type_id'=>$data['type_id'],'code'=>$data['product_code'],'company'=>$data['product_company'],
            'description'=>$data['product_description'],'price'=>$data['product_price'],'slug'=>str_slug($data['product_name']),
            'image'=>$filename]);
            return redirect('/admin/view-products')->with('flash_message_success','Product has been updated!!');
        }
        $productDetails = Products::where(['id'=>$id])->first();

        //Occasion dropdown code 
        $occasions = Occasion::get();
        $occasions_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($occasions as $cat){
            if($cat->id==$productDetails->occasion_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $occasions_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            //code for showing subcategories in main category
            // $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            // foreach($sub_categories as $sub_cat){
            //     if($sub_cat->id==$productDetails->category_id){
            //         $selected = "selected";
            //     }else{
            //         $selected = "";
            //     }
            // $categories_dropdown .= "<option value = '".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            // }
        }
        //Flower type dropdown code 
        $types = Type::get();
        $types_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($types as $cat){
            if($cat->id==$productDetails->type_id){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $types_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            
        }
        return view('admin.products.edit_product')->with(compact('productDetails','occasions_dropdown','types_dropdown'));
    }
    public function deleteProduct($id=null){
        Products::where(['id'=>$id])->delete();
        Alert::success('Deleted Successfully', 'Success Message');
        return redirect()->back()->with('flash_message_error','Product Deleted');
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all(); 
        Products::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    public function products($slug=null){

        $product = Products::where(['slug'=>$slug])->first();
        if ($product!=null) {
           
            $featuredProducts = Products::where(['featured_products'=>1])->get();
            $productDetails = Products::with('attributes')->where('id',$product->id)->first();
            $ProductsAltImages = ProductsImages::where('product_id',$product->id)->get();
            // echo $productDetails;die;

            if (Auth::check()) {
                $user_email = Auth::user()->email;
                $session_id = Session::get('session_id');
                $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                    $query->where('user_email', '=', $user_email)
                          ->orWhere('session_id', '=', $session_id);
                })->get();
                // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
            }else{
                $session_id = Session::get('session_id');
                $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
            }
            // dd($session_id);
            foreach($userCart as $key=>$product){
                $productDetails = Products::where(['id'=>$product->product_id])->first();
                $userCart[$key]->image = $productDetails->image;
            }


            return view('wayshop.product_details')->with(compact('productDetails','ProductsAltImages','featuredProducts','userCart'));
        }else{
            return redirect()->back();
        }
    }
    public function addAttributes(Request $request,$id=null){
        $productDetails = Products::with('attributes')->where(['id'=>$id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            foreach($data['sku'] as $key =>$val){
                if(!empty($val)){
                    //Prevent duplicate SKU Record
                    $attrCountSKU = ProductsAttributes::where('sku',$val)->count();
                    if($attrCountSKU>0){
                        return redirect('/admin/add-attributes/'.$id)->with('flash_message_error','SKU is already exist please select another sku');
                    }
                    //Prevent duplicate Size Record
                    $attrCountSizes = ProductsAttributes::where(['product_id'=>$id,'size'=>$data['size']
                    [$key]])->count();
                    if($attrCountSizes>0){
                    return redirect('/admin/add-attributes/'.$id)->with('flash_message_error',''.$data['size'][$key].'Size is already exist please select another size');
                    }
                    $attribute = new ProductsAttributes;
                    $attribute->product_id = $id;
                    $attribute->sku = $val;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }

            }
            return redirect('/admin/add-attributes/'.$id)->with('flash_message_success','Products attributes added successfully!');

        }
        return view('admin.products.add_attributes')->with(compact('productDetails'));
    }
    public function addDiscount(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo"<pre>"; print_r($data);die;
            DB::table('product_discount')->insert(['product_id'=>$data['product_id'],'amount'=>$data['amount'],
            'amount_type'=>$data['amount_type'],'expiry_date'=>$data['expiry_date'],'status'=>1]); 
            // return redirect('/admin/view-discounts')->with('flash_message_success','Coupon has been added Successfully');
          }
        $product = Products::where('id',$id)->first();
        $discounts = DB::table('product_discount')->where(['product_id'=>$id])->get();

        return view('admin.products.add_discount')->with(compact('product','discounts')); 
    }
    public function updateDiscountStatus(Request $request,$id=null){
        $data = $request->all();
        DB::table('product_discount')->where('id',$data['id'])->update(['status'=>$data['status']]);  
    }
    public function deleteDiscount($id=null){
        DB::table('product_discount')->where('id',$id)->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
        } 
    public function deleteAttribute($id=null){
        ProductsAttributes::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','Product Attribute is deleted!');

    }
    public function editAttributes(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            foreach($data['attr'] as $key=>$attr){
                ProductsAttributes::where(['id'=>$data['attr'][$key]])->update(['sku'=>$data['sku'][$key],
                'size'=>$data['size'][$key],'price'=>$data['price'][$key],'stock'=>$data['stock'][$key]]);
            }
            return redirect()->back()->with('flash_message_success','Products Attributes Updated!!!');
        }
    }
    public function addImages(Request $request,$id=null){
        $productDetails = Products::where(['id'=>$id])->first();
        $productType = Type::where(['id'=>$productDetails->type_id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasfile('image')){
                $files = $request->file('image');
                foreach($files as $file){
                    $image = new ProductsImages;
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111,9999).'.'.$extension;
                    $image_path = 'uploads/products/'.$filename;
                    Image::make($file)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();
                }
            }
            return redirect('/admin/add-images/'.$id)->with('flash_message_success','Image has been updated');
        }
        $productImages = ProductsImages::where(['product_id'=>$id])->get();
        return view('admin.products.add_images')->with(compact('productDetails','productType','productImages'));
    }
    public function deleteAltImage($id=null){
        $productImage = ProductsImages::where(['id'=>$id])->first();

        $image_path = 'uploads/products/';
        if(file_exists($image_path.$productImage->image)){
            unlink($image_path.$productImage->image);
        }
        ProductsImages::where(['id'=>$id])->delete();
        Alert::success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateFeatured(Request $request,$id=null){
        $data = $request->all();
        Products::where('id',$data['id'])->update(['featured_products'=>$data['status']]);

    }
    public function getprice(Request $request){
         $data = $request->all();
        //  echo "<pre>";print_r($data);die;
        $proArr = explode("-",$data['idSize']);
        $proAttr = ProductsAttributes::where(['product_id'=>$proArr[0],'size'=>$proArr[1]])->first();
        echo $proAttr->price;
    }
    public function addtoCart(Request $request){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $data = $request->all();
        // dd($data);
        // echo "<pre>";print_r($data);die;
        // dd(Session::get('session_id'));
        if(empty(Auth::user()->email)){
            $data['user_email'] = '';
        }
        else{
            $data['user_email'] = Auth::user()->email;
        }
        $session_id = Session::get('session_id');
        if(empty($session_id)){
        $session_id = str_random(40);
        Session::put('session_id',$session_id);
        }
        
        // $sizeArr = explode('-',$data['size']);
        $countProducts = DB::table('cart')->where(['product_id'=>$data['product_id'],'product_color'=>'color','price'=>$data['price'],
        'size'=>'1','session_id'=>$session_id])->count();
        if($countProducts>0){
            return redirect()->back()->with('flash_message_error','Product already exists in cart');
        }else{
            DB::table('cart')->insert(['product_id'=>$data['product_id'],'product_name'=>$data['product_name'],
            'product_code'=>$data['product_code'],'company'=>$data['company'],'price'=>$data['price'],
            'size'=>'1','quantity'=>$data['quantity'],'user_email'=>$data['user_email'],
            'session_id'=>$session_id]); 
        }
        if (Auth::check()) {
            # code...
            Auth::user()->notify(new NewOrder());
        }
        
        return redirect('/cart')->with('flash_message_success','Product has been added in cart');
    }
    public function cart(Request $request){

        if (Auth::check()) {
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
            
            $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
                $query->where('user_email', '=', $user_email)
                      ->orWhere('session_id', '=', $session_id);
            })->get();
            // dd($userCart);
            // $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        }
        // dd($session_id);
        foreach($userCart as $key=>$products){
            $productDetails = Products::where(['id'=>$products->product_id])->first();
            $userCart[$key]->image = $productDetails->image;
        }
        // echo "<pre>";print_r($userCart);die;
        return view('wayshop.products.cart')->with(compact('userCart'));
    }
    public function deleteCartProduct($id=null){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id',$id)->delete();
        return redirect('/cart')->with('flash_message_error','Product has been deleted!');
    }
    public function updateCartQuantity($id=null,$quantity=null){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id',$id)->increment('quantity',$quantity);
        return redirect('/cart')->with('flash_message_success','Product Quantity has been updated Successfully');
    }
    public function applyCoupon(Request $request){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $couponCount = Coupons::where('coupon_code',$data['coupon_code'])->count();
            if($couponCount == 0){
                return redirect()->back()->with('flash_message_error','Coupon code does not exists');
            }else{
                // echo "Success";die;
                $couponDetails = Coupons::where('coupon_code',$data['coupon_code'])->first();
                //Coupon code status
                if($couponDetails->status==0){
                    return redirect()->back()->with('flash_message_error','Coupon code is not active');
                }
                //Check coupon expiry date
                $expiry_date = $couponDetails->expiry_date;
                $current_date = date('Y-m-d');
                if($expiry_date < $current_date){
                    return redirect()->back()->with('flash_message_error','Coupon Code is Expired');
                }
                //Coupon is ready for discount
                $session_id = Session::get('session_id');
                if (Auth::check()) {
                    $user_email = Auth::user()->email;
                    $userCart = DB::table('cart')->where('user_email',$user_email)->get();
                }else{
                    $session_id = Session::get('session_id');
                    $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
                }
                $total_amount = 0;
                foreach($userCart as $item){
                    $total_amount = $total_amount + ($item->price*$item->quantity);
                }
                //Check if coupon amount is fixed or percentage
                if($couponDetails->amount_type=="Fixed"){
                    $couponAmount = $couponDetails->amount;
                }else{
                    $couponAmount = $total_amount * ($couponDetails->amount/100);
                }
                //Add Coupon code in session
                Session::put('CouponAmount',$couponAmount);
                Session::put('CouponCode',$data['coupon_code']);
                return redirect()->back()->with('flash_message_success','Coupon Code is Successffully Applied.You are Availing Discount');
            }
        }
    }

    public function checkout(Request $request){
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        $userDetails = User::find($user_id);
        $shippingCount = DeliveryAddress::where('user_id',$user_id)->count();
        
        #update cart table
        // $session_id = Session::get('session_id');
        // DB::table('cart')->where('session_id',$session_id)->update(['user_email'=>$user_email]);

        if ($request->isMethod('post')) {
            # code...
            $data = $request->all();
            // dd($data);
            // if ($shippingCount > 0) {
            //     DeliveryAddress::where('user_id',$user_id)->update(['name']);
            // } else {
                $shipping = new DeliveryAddress();
                $shipping->user_id = $user_id;
                $shipping->user_email = $user_email;
                $shipping->name = $data['name'];
                $shipping->address = $data['address'];
                $shipping->city = $data['city'];
                $shipping->state = $data['state'];
                $shipping->country = $data['country'];
                $shipping->pincode = $data['pincode'];
                $shipping->mobile = $data['mobile'];
                $shipping->save();
            // }
            // echo 'redirect ',die;
            return redirect('/order_review');
            
        }

        return view('wayshop.products.checkout')->with(compact('userDetails'));
    }

    public function orderReview(){

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        $userDetails = User::find($user_id);
        $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();
        $userCart = DB::table('cart')->where('user_email',$user_email)->get();

        foreach ($userCart as $key => $product) {
            $productDetails = Products::where('id',$product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;

        }

        return view('wayshop.products.order_review')->with(compact('shippingDetails','userCart'));
    }
    public function placeOrder(Request $request){
        if ($request->isMethod('post')) {
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;
            $data=$request->all();
            // dd($data);
            if (empty(Session::get('CouponCode'))) {
                $couponCode = "Not Used";
            }
            else{
                $couponCode = Session::get('CouponCode');

            }
            if (empty(Session::get('CouponAmount'))) {
                $couponAmount = 0;
            }
            else{
                $couponAmount = Session::get('CouponAmount');

            }
            $shippingDetails = DeliveryAddress::where('user_email',$user_email)->first();
            
            $order = new Orders();
            $order->user_id = $user_id;
            $order->user_email = $user_email;
            $order->name = $shippingDetails->name;
            $order->address = $shippingDetails->address;
            $order->city = $shippingDetails->city;
            $order->state = $shippingDetails->state;
            $order->country = $shippingDetails->country;
            $order->pincode = $shippingDetails->pincode;
            $order->mobile = $shippingDetails->mobile;
            $order->coupon_code = $couponCode;
            $order->coupon_amount = $couponAmount;
            $order->order_status = "New";
            $order->payment_method = $data['payment_method'];
            $order->grand_total = $data['grand_total'];
            $order->save();

            $order_id = DB::getPdo()->lastinsertID();
            $cartProducts = DB::table('cart')->where('user_email',$user_email)->get();

            foreach ($cartProducts as $product) {
                $cartPro = new OrdersProduct();
                $cartPro->order_id = $order_id;
                $cartPro->user_id = $user_id;
                $cartPro->product_id = $product->id;
                $cartPro->product_code = $product->product_code;
                $cartPro->product_name = $product->product_name;
                $cartPro->product_color = $product->product_color;
                $cartPro->product_size = $product->size;
                $cartPro->product_price = $product->price;
                $cartPro->product_qty = $product->quantity;
                $cartPro->save();


            }
            Session::put('order_id',$order_id);
            Session::put('grand_total',$data['grand_total']);
            return redirect('/thanks');
            
        }
    }

    public function thanks(){
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email',$user_email)->delete();
        // Session::forget('session_id');
        return view('wayshop.orders.thanks');
    }

    public function userOrders(){
        $user_id = Auth::user()->id;
        $orders = Orders::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->get();
        return view('wayshop.orders.user_orders')->with(compact('orders'));
    }

    public function userOrderDetails($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        return view('wayshop.orders.user_order_details')->with(compact('orderDetails','userDetails'));
    }

    //admin view orders

    public function viewOrders(){
        $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        // dd(count($orders));
        return view('admin.orders.view_orders')->with(compact('orders'));
    }

    public function viewOrderDetails($order_id){
        $orderDetails = Orders::with('orders')->where('id',$order_id)->first();
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        return view('admin.orders.order_details')->with(compact('orderDetails','userDetails'));
    }
 
    public function updateOrderStatus(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
        }
        Orders::where('id',$data['order_id'])->update(['order_status'=>$data['order_status']]);
        $newOrders = Orders::with('orders')->where('order_status','New')->get();
 
        Session::put('newOrders',$newOrders);
        return redirect()->back()->with('flash_message_success','Order Status has been Updated Successfully!');
    }

}
