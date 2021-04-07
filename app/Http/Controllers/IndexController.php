<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;
use App\Category;
use App\Products;
use App\Occasion;
use App\Type;
use App\City;
use App\Florist;
use Auth;
use Exception;
use Validator;
use DB;
use Session;
class IndexController extends Controller
{
    public function getCities(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $fieldName = $data['field_name'];
        $name = strtolower(trim($name));
        if (empty($fieldName)) {
            # code...
            $fieldName = 'name';
        }

        $cities = DB::table('cities')->select('city_name.*')->where('LOWER(city_name)','LIKE',"$name%")->limit(25)->get();
        return $cities;
    }

    public function efood(){
        // dd(Session::get('cart')[0]['description']);
        // dd(Session::get('userEmail'));
        // dd(count(Session::get('cart')));
        $products = Products::paginate(4);
        $florists = Florist::where(['shop_of_id'=>'0'])->get();
        $types = Type::get();
        $cities = City::get();
        // dd($products);
        return view('efood')->with(compact('products','florists','types','cities'));
    }
    public function matchStore(){
        $products = Products::get();
        $florists = Florist::where(['shop_of_id'=>'0','city' => Session::get('region')])->get();
        // dd($florists[1]);
        $types = Type::get();
        $cities = City::get();
        $notMatch = 1;
        return view('search_store')->with(compact('products','florists','types','cities','notMatch'));

    }
    public function store($slug){
        // $occasions = Occasion::find(3);
        // dd(count($occasions->products));
        $floristDetails = Florist::where(['slug'=>$slug])->first();
        // dd(Session::get('region'));
        
        if (strcasecmp($floristDetails->city,Session::get('region')) ==0 ) {
            // dd('match');
            $chainStores = Florist::where(['shop_of_id'=>$floristDetails->id])->get();
            $showProducts = Products::where(['florist_id'=>$floristDetails->id])->paginate(2);
            $products = Products::where(['florist_id'=>$floristDetails->id])->get();
            // dd($floristDetails);
            $occasions = Occasion::get();
            return view('store_details')->with(compact('floristDetails','showProducts','occasions','products','chainStores'));;
        
        }else{
            // dd('not match');
            $products = Products::get();
            $florists = Florist::where(['shop_of_id'=>'0','city' => Session::get('region')])->get();
            // dd($florists[1]);
            $types = Type::get();
            $cities = City::get();
            // $errorMsg = 'Sorry, stores from "The Big Bad Wolf" chain available in efood don't deliver to your address "12 14, Agios Konstantinos Agrinio, 19322"Here are the stores that serve your address!';
            $notMatch = 0;
            return view('search_store')->with(compact('products','florists','types','cities','notMatch','floristDetails'));
        }
        
    }
    public function index(){
        // DB::table('banners');
        $banners = DB::table('banners')->where('status','1')->orderby('sort_order','asc')->get();
        $occasions = Occasion::get();
        $allProducts = Occasion::get();

        $types = Type::get();
        $products = Products::paginate(6); 
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
        // dd($products);
        $wish_list=array();
        if (Auth::check()) {
            $wish_list = DB::table('wish_list')->where(['user_id'=>Auth::user()->id])->get();
        }
        return view('wayshop.index')->with(compact('banners','allProducts','occasions','types','products','userCart','wish_list'));
    }
    public function categories($slug){
        $occasions = Occasion::get();
        $types = Type::get();
        $cat_name = Occasion::where(['slug'=>$slug])->first();
        // dd($cat_name);
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
        if ($cat_name!=null) {
            $products = Products::where(['occasion_id'=>$cat_name->id])->get(); 
            return view('wayshop.category')->with(compact('occasions','products','types','cat_name','userCart'));
        }else{
            return redirect()->back();
        }
    }
    public function types($slug){
        $occasions = Occasion::get();
        $types = Type::get();
        $cat_name = Type::where(['slug'=>$slug])->first();
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
        if ($cat_name!=null) {
            # code...
            $products = Products::where(['type_id'=>$cat_name->id])->get();
            return view('wayshop.category')->with(compact('occasions','types','products','cat_name','userCart'));
        }else{
            return redirect()->back();
        }
    }

    public function results(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data['query']);
            $products=Products::where('name','like','%'.$data['query'].'%')->get();
            // dd(count($products));
            $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();
            $categories = Category::with('categories')->where(['parent_id'=>0])->get();
            
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

            return view('wayshop.result')->with(compact('banners','categories','products','userCart'));

        }
    }


    public function addToCart(Request $request){
        // Session::flush();
        // dd($request->all());

        $product = [
            'store'=>$request->store_name,
            'name'=>$request->product_name,
            'description'=>$request->product_description,
            'price'=>$request->product_price,
            'quantity'=>$request->product_quantity,
            'image'=>$request->product_image,
        ];
        Session::push('cart',$product);

        return redirect()->back();

    }
    public function removeFromCart($name){
        $products = session()->pull('cart', []); // Second argument is a default value
        // dd(array_search($name, $products));
        foreach ($products as $index => $product) {
            # code...
            // dd($product);
            if(($key = array_search($name, $product)) !== false) {
                // dd($products[$index]);
                unset($products[$index]);
            }
        }
        session()->put('cart', $products);
        // dd(count(Session::get('cart')));
        return redirect()->back();
    }   
    //add to cart

    // ----------------------------checkout---------
    public function checkout($slug){
        $floristDetails = Florist::where(['slug'=>$slug])->first();

        $total_amount = 0;
        if (Session::has('cart')) {
            foreach (Session::get('cart') as  $item) {
                if ($item['store']==$floristDetails->name){
                    $total_amount = $total_amount + ($item['price']*$item['quantity']);
                }
            }
        }
        Session::put('shipping_fee',$floristDetails->shipping_fee);
        // dd(Session::get('shipping_fee'));
        $final_amount = $floristDetails->shipping_fee+$total_amount;

        // dd($final_amount);
        // The POST URL and parameters

        $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        //$request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        $api_key = '&zhAfc';

        //Set the Payment Amount
        $amount = $final_amount * 100;	// Amount in cents

        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source;

        // Get the curl session object
        $session = curl_init($request);


        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);

        curl_close($session);

        // Parse the JSON response
        try {
            if(is_object(json_decode($res_body))){
                $result_obj=json_decode($res_body);
            }else{
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                        throw new Exception("API Call failed! The error was: ".trim($match[1]));
            }
        } catch( Exception $e ) {
            echo $e->getMessage();
        }

        if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0
            $orderId = $result_obj->OrderCode;
            // echo 'Your Order Code is: <b>'. $orderId.'</b>';
            // echo '<br/><br/>';
            // echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
            // echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
            return view('checkout')->with(compact('floristDetails','orderId'));
        }
        else{
            echo 'The following error occured: ' . $result_obj->ErrorText;
        }


    }


    //add address
    public function addAddress(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'region' => 'required',
            'zipCode' => 'required',
        ]);
        if ($validator->passes()) {
            $address = [
                'city'=>$request->city,
                'region'=>$request->region,
                'zip_code'=>$request->zipCode,
            ];
            Session::put('address',$address);
            Session::put('city',$request->city);
            Session::put('region',$request->region);
            // dd(Session::get('address'));
            // return redirect('/match_store');
            return response()->json('success');

        }
        return response()->json([
            'error' => $validator->errors()->all()
        ]);

    }

    public function getDistance(){
        // Google API key
        $apiKey = 'AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4';
        $addressFrom = 'Sargodha';
        $addressTo   = 'Islamabad';
        $unit = 'k';

        $arrContextOptions= [
            'ssl' => [
                'cafile' => '/path/to/bundle/cacert.pem',
                'verify_peer'=> true,
                'verify_peer_name'=> true,
            ],
        ];

        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo     = str_replace(' ', '+', $addressTo);
        
        // Geocoding API request with start address
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey,false,$arrContextOptions);
        $outputFrom = json_decode($geocodeFrom);
        if(!empty($outputFrom->error_message)){
            return $outputFrom->error_message;
        }
        
        

        // Geocoding API request with end address
        $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey,false,
        stream_context_create($arrContextOptions));
        $outputTo = json_decode($geocodeTo);
        if(!empty($outputTo->error_message)){
            return $outputTo->error_message;
        }
        
        // Get latitude and longitude from the geodata
        $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
        $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
        $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
        $longitudeTo    = $outputTo->results[0]->geometry->location->lng;
        
        // Calculate distance between latitude and longitude
        $theta    = $longitudeFrom - $longitudeTo;
        $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist    = acos($dist);
        $dist    = rad2deg($dist);
        $miles    = $dist * 60 * 1.1515;
        
        // Convert unit and return distance
        $unit = strtoupper($unit);
        if($unit == "K"){
            return round($miles * 1.609344, 2).' km';
        }elseif($unit == "M"){
            return round($miles * 1609.344, 2).' meters';
        }else{
            return round($miles, 2).' miles';
        }
    }

    //------------------viva wallet------

    public function vivaWallet(){
    //    dd('check');
        // The POST URL and parameters
        $request =  'https://demo.vivapayments.com/api/orders';	// demo environment URL
        //$request =  'https://www.vivapayments.com/api/orders';	// production environment URL

        // Your merchant ID and API Key can be found in the 'Security' settings on your profile.
        $merchant_id = 'd02176cc-cd20-4843-9ae4-0b9d37779247';
        $api_key = '&zhAfc';

        //Set the Payment Amount
        $amount = 8*100;	// Amount in cents

        //Set some optional parameters (Full list available here: https://developer.vivawallet.com/api-reference-guide/payment-api/#tag/Payments/paths/~1orders/post)
        $allow_recurring = 'true'; // If set to true, this flag will prompt the customer to accept recurring payments in the future.
        $request_lang = 'en-US'; //This will display the payment page in English (default language is Greek)
        $source = '9563'; // This will assign the transaction to the Source with Code = "Default". Alternatively, you can use the 4-digit code of a custom payment source if set up.

        $postargs = 'Amount='.urlencode($amount).'&AllowRecurring='.$allow_recurring.'&RequestLang='.$request_lang.'&SourceCode='.$source;

        // Get the curl session object
        $session = curl_init($request);

        // dd($session);
        // Set the POST options.
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postargs);
        curl_setopt($session, CURLOPT_HEADER, true);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $merchant_id.':'.$api_key);
        // curl_setopt($session, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');

        // Do the POST and then close the session
        $response = curl_exec($session);
        // curl_getinfo($session);
        // if (curl_exec($session) === FALSE) {
        //     die("Curl Failed: " . curl_error($session));
        //  } else {
        //     return curl_exec($session);
        //  }
        // dd($response);
        // Separate Header from Body
        $header_len = curl_getinfo($session, CURLINFO_HEADER_SIZE);
        $res_header = substr($response, 0, $header_len);
        $res_body =  substr($response, $header_len);
        // dd($res_body);
        curl_close($session);
        // dd(json_decode($res_body));
        // Parse the JSON response
        try {
            if(is_object(json_decode($res_body))){
                $result_obj=json_decode($res_body);
            }else{
                preg_match('#^HTTP/1.(?:0|1) [\d]{3} (.*)$#m', $res_header, $match);
                        throw new Exception("API Call failed! The error was: ".trim($match[1]));
            }
        } catch( Exception $e ) {
            echo $e->getMessage();
        }

        if ($result_obj->ErrorCode==0){	//success when ErrorCode = 0
            $orderId = $result_obj->OrderCode;
            echo 'Your Order Code is: <b>'. $orderId.'</b>';
            echo '<br/><br/>';
            echo 'To simulate a successful payment, use the 16-digit test credit card 5511070000000020, with a valid expiration date and 111 as CVV2.';
            echo '</br/><a href="https://demo.vivapayments.com/web/newtransaction.aspx?ref='.$orderId.'" >Make Payment</a>';
        }
        else{
            echo 'The following error occured: ' . $result_obj->ErrorText;
        }

    }



}
