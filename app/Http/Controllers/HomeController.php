<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Session;
use Throwable;


class HomeController extends Controller
{
    public function login(){

        return view('login');
    }

    public function home(){

        return view('home');
    }

    public function connect(Request $request){
        
        try{
            $woocommerce = new Client(
                $request->host, 
                $request->key, 
                $request->secret,
                [
                    'wp_api' => true,
                    'version' => 'wc/v3',
                    'query_string_auth' => true            ]
            );
            
            Session::put('url',$request->host);
            Session::put('api_key',$request->key);
            Session::put('api_secret',$request->secret);
            Session::save();
            
            $products = $woocommerce->get("products");
            return redirect('/home');
        }catch(Throwable  $ex){

            return redirect('/')->with('msg', 'Wrong Informations!! please try again!');
        }
    }
        public function logout(){
            Session::put('url','la');
            Session::put('api_key','la');
            Session::put('api_secret','la');
            return redirect('/');
        }
    
}
