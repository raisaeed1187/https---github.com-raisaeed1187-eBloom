<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;
use Session;
use App\admin;
use App\Florist;
use App\User;
use App\Orders;
use App\City;
use App\Products;
use App\Type;

use RealRashid\SweetAlert\Facades\Alert;

class FloristController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // dd($data);
            // dd(md5($data['password']));
            $floristCount = Florist::where(['email'=>$data['email'],'password'=>md5($data['password'])])->count();
            // dd($floristCount);
            if($floristCount > 0){
                $florist = Florist::where(['email'=>$data['email'],'password'=>md5($data['password'])])->first();
                // dd($florist);
                if ($florist->status==1) { 
                    # code...
                    Session::put('adminSession', $florist->email);
                    Session::put('adminId', $florist->id);
                    Session::put('adminStatus',$florist->admin);
                    return redirect('florist/dashboard');
                }else{
                    return redirect('/florist')->with('flash_message_error','Sorry! you are blocked');
                }
            }else{
                return redirect('/florist')->with('flash_message_error','Invalid Email or Password');
            }
        }
        return view('admin.florist.florist_login');
    }
    public function florist_logout(){
        Session::flush();
        return redirect('/florist')->with('flash_message_success','loged out Successfully!');
    }
    public function addFlorist(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $florist = new Florist;
            $florist->name = $data['name'];
            $florist->email = $data['email'];
            $florist->password = md5($data['password']);
            $florist->address = $data['address'];
            $florist->slug = str_slug($data['name']);

            // $florist->country = $data['country'];
            if (Session::get('adminStatus')=='2') {//florist added by shop owner
                # code...
                $florist->admin = 3;
                $florist->shop_of_id = Session::get('adminId');
            }else{
                $florist->shop_of_id = 0;
            }
            $florist->city = $data['city'];
            $florist->save();
            return redirect('/admin/view-florists')->with('flash_message_success','New florist has been added successfully!!');

        }
        $cities= City::get();
        return view('admin.florist.add_florist')->with(compact('cities'));
    }
    
    public function floristProfile(Request $request){
        $userDetails = Florist::where('email',Session::get('adminSession'))->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            $adminCount = Florist::where(['email'=>Session::get('adminSession')])->count();
            $admin = Florist::where(['email'=>Session::get('adminSession')])->first();
            
            // dd($admin);
            if ($adminCount == 1) {
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
                Florist::where('id',$admin->id)->update(['name'=>$data['name'],'email'=>$data['email'],'address'=>$data['address'],'city'=>$data['city'],'image'=>$filename]);
                return redirect()->back()->with('flash_message_success','Profile has been updated successfully!');

            }else{
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }

        return view('admin.florist.florist_profile')->with(compact('userDetails'));
    }
    public function changePassword(Request $request){
        $userDetails = admin::where('status',1)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            $adminCount = Florist::where(['user_name'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'admin'=>2])->count();
            $admin = Florist::where(['user_name'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'admin'=>2])->first();
            
            // dd($admin);
            if ($adminCount == 1) {
                $new_pwd = md5($data['new_pwd']);
                Florist::where('id',$admin->id)->update(['password'=>$new_pwd]);
                return redirect()->back()->with('flash_message_success','Password has been changed successfully!');

            }else{
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }

        return view('admin.florist.florist_profile')->with(compact('userDetails'));
    }
    public function viewFlorists(Request $request){
        $allFlorists = null; 
        
        if (Session::get('adminStatus')=='2') {//2 means shop owner
            $allFlorists = Florist::where(['shop_of_id'=>Session::get('adminId')])->get();
            
        }else{
            $allFlorists = Florist::where(['shop_of_id'=>0])->get();

        }

        if($request->ismethod('post')){
            
        }
        return view('admin.florist.view_florists')->with(compact('allFlorists'));

    }
    public function viewFloristFlowers($id){
        $products = null;
        if (Session::get('adminStatus')=='1') {
            $florist = Florist::where(['shop_of_id'=>$id])->first();
            $product = Products::where(['florist_id'=>$id])->get();
            $newProducts = Products::where(['florist_id'=>$florist->id])->get();
            // $products = array_merge($product, $newProducts);
            $products = $product->merge($newProducts);
        }else{
            $products = Products::where(['florist_id'=>$id])->get();
        }
          
        $types = Type::get();

        return view('admin.products.view_products')->with(compact('products','types'));
    }
    public function deleteFlorist($id=null){
        Florist::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }

    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Florist::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
