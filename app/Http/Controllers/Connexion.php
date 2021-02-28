<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Session;

class Connexion extends Controller
{
    public $woocommerce;

    public function __construct(){
        $this->woocommerce = new Client(
            Session::get('url'),
            Session::get('api_key'),
            Session::get('api_secret'),
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true
            ]
        );
    }
}
