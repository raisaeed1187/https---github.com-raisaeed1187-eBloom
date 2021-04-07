<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\admin;
use App\User;
use App\Orders;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // dd(md5($data['password']));
            $adminCount = admin::where(['username'=>$data['username'],'password'=>md5($data['password'])])->count();
            // dd($adminCount);
            if($adminCount > 0){
                Session::put('adminSession',$data['username']);
                Session::put('adminStatus','1');
                return redirect('admin/dashboard');
            }else{
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        $newOrders = Orders::with('orders')->where('order_status','New')->get();

        
        // dd($newOrders);
        Session::put('newOrders',$newOrders);
        // dd(count(Session::get('newOrders')));

        return view('admin.dashboard');
    } 
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','loged out Successfully!');
    }

    public function adminProfile(Request $request){
        $userDetails = admin::where('status',1)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            $adminCount = admin::where(['username'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'status'=>1])->count();
            $admin = admin::where(['username'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'status'=>1])->first();
            
            // dd($admin);
            if ($adminCount == 1) {
                $new_pwd = md5($data['new_pwd']);
                admin::where('id',$admin->id)->update(['password'=>$new_pwd,'username'=>$data['username']]);
                return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');

            }else{
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }

        return view('admin.profile')->with(compact('userDetails'));
    }

    


}
