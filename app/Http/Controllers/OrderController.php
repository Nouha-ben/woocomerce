<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Connexion;
use Automattic\WooCommerce\Client;
use Session;
use Excel;
use App\Http\Controllers\ExportExcelController;

class OrderController extends Controller
{
    protected $woocommerce; 

    public function __construct(){
       
    }

    // lister les produits
    public function liste(){
        //dd($this->woocommerce->get("products"));

        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

        $data = [
          'orders' => $this->woocommerce->get('orders',array('per_page'=>50))
        ];

        return view('orders.liste')->with($data);
    }


    //récupérer le formulaire de modification
    public function edit($id)
    {
      
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

      $data = [
        'order' => $this->woocommerce->get('orders/'.$id)
      ];
   
      return view('orders.update')->with($data);
         
    }

    //modifier le produit
    public function update(Request $request)
    {
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

      $data = [
        'status' => $request->status
      ];

      $this->woocommerce->put("orders/".$request->id , $data);
        return redirect('/orders');
    }
    public function excel(){

      $con = new Connexion();
      $this->woocommerce = $con->woocommerce;
      $list_orders = $this->woocommerce->get("orders", array('per_page'=>100,'page'=>1));

      $file[]=array('Order Number','Order by','total price','status','date');
      foreach ($list_orders as $order)
      {
          $file[]=array(
              'Order Number'=>$order->number,
              'Order by'=>$order->billing->first_name,
              'total price'=>$order->total,
              'status'=>$order->status,
              'date'=>$order->date_created 

          );
      }

      return Excel::download(new ExportExcelController($file),'orders_data.xlsx');

    }

  
}
