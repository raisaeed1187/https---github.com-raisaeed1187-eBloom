<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Products;

use Auth;
use DB;
use Session;
use Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function userLoginRegister(){
        return view('wayshop.users.login_register');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                return redirect()->back()->with('flash_message_error','Email is already exist');
            }else{
                //adding user in table
                $user = new User; 
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    Session::put('userEmail',$data['email']);
                    return redirect('/welcome');
            }
        }
    }
}
   public function logout(){
       Session::forget('userEmail');
       Auth::logout();
       return redirect('/');
   }
   public function login(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();
           $validator = Validator::make($request->all(), [
            'email' => 'required|email',
             'password' => 'required',
            ]);
        //    echo "<pre>";print_r($data);die;
        if ($validator->passes()) {
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            Session::put('userEmail',$data['email']);
            // return redirect('/welcome');
            return response()->json('success');
        }else{
            // return response()->json('Invalid username and password!');
            return response()->json([
                'error' => [
                    'email' => 'Invalid username and password!'
                ]
            ]);
            // return redirect()->back()->with('flash_message_error','Invalid username and password!');
        }
        }
        return response()->json([
            'error' => $validator->errors()->all()
        ]);
       }
   }
   public function account(Request $request){
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
       return view('wayshop.users.account')->with(compact('userCart'));
   }
   //------------------wishlist section---------
   public function wishList(){
        $wish_list = DB::table('wish_list')->where(['user_id'=>Auth::user()->id])->get();
        $products = Products::get();
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
        return view('wayshop.users.wish_list')->with(compact('wish_list','products','userCart'));
   }

   public function addToWishList($slug){
        $product = Products::where(['slug'=>$slug])->first();
        if ($product!=null) {
            # code...
            DB::table('wish_list')->insert(['product_id'=>$product->id,'user_id'=>Auth::user()->id
                ]);
            return redirect('/wish-list')->with('flash_message_success','Product has been added in wish list');
        }else{
            return redirect()->back();
        }

   }
    public function deleteWishList($slug){
        $product = Products::where(['slug'=>$slug])->first();
        if ($product!=null) {
            DB::table('wish_list')->where(['product_id'=>$product->id,'user_id'=>Auth::user()->id])->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    //end wish list
   public function changePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $old_pwd = User::where('id',Auth::user()->id)->first();
            $current_pwd = $data['current_pass'];
            if(Hash::check($current_pwd,$old_pwd->password)){
                $new_pwd = bcrypt($data['password']);
                User::where('id',Auth::user()->id)->update(['password'=>$new_pwd]);
                return redirect()->back()->with('flash_message_success','Password has been Updated Successfully!');

            }else{
                return redirect()->back()->with('flash_message_error','Your current password in valid!');
            }
        }
       return view('wayshop.users.change_password');
   }

   public function changeAddress(Request $request){
    
    $user_id = Auth::user()->id;
    $user_email =Auth::user()->email;
    $userDetails = User::find($user_id);

    if ($request->isMethod('post')) {
        $data=$request->all();
        $user = User::find($user_id);
        $user->email = $user_email;
        $user->name = $data['name'];
        $user->address = $data['address'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->pincode = $data['pincode'];
        $user->mobile = $data['mobile'];
        $user->save();
        return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');
    }

    return view('wayshop.users.change_address')->with(compact('userDetails'));
}

}
