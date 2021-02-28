<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConnectController;
use Automattic\WooCommerce\Client;
use Session;
use Excel;
use App\Http\Controllers\ExportExcelController;


class ProductController extends Controller
{
    protected $woocommerce; 

    public function __construct(){
       
    }

    // lister les produits
    public function liste(){

        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

        $data = [
          'products' => $this->woocommerce->get('products',array('per_page'=>50))
        ];

        return view('products.liste')->with($data);
    }

    //récupérer le formulaire d'Ajout
    public function create(){

      return view('products.create');
   }

   // Ajouter le Product
     public function add(Request $request){
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;
       

        $data = [
          'name' => $request->name,
          'type' => $request->type,
          'regular_price' => $request->price,
          'description' => $request->description,
          'images' => [
              [
                  'src' => $request->image
              ]
          ]
        ];
     
        $this->woocommerce->post("products",$data);
        return redirect('/products');
    }


    //récupérer le formulaire de modification
    public function edit($id)
    {
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;
        $data = [
        'product' => $this->woocommerce->get('products/'.$id)
      ];
   
      return view('products.update')->with($data);
         
    }

    //modifier le produit
    public function update(Request $request)
    {
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

      $data = [
        'name' => $request->name,
        'type' => $request->type,
        'regular_price' => $request->price,
        'description' => $request->description,
        'images' => [
            [
                'src' => $request->image
            ]
        ]
      ];

      $this->woocommerce->put("products/".$request->id , $data);
        return redirect('/products');
    }
  

    // Deleting Product
    public function delete(Request $request){
        $con = new Connexion();
        $this->woocommerce = $con->woocommerce;

        $this->woocommerce->delete("products/".$request->id);
        return redirect('/products');
    }
    public function excel(){

      $con = new Connexion();
      $this->woocommerce = $con->woocommerce;
      $list_products = $this->woocommerce->get("products", array('per_page'=>100,'page'=>1));

      $file[]=array('id','product','price','regular price','on Sale');
      foreach ($list_products as $product)
      {
          $file[]=array(
              'id'=>$product->id,
              'product'=>$product->name,
              'price'=>$product->price,
              'regular price'=>$product->regular_price,
              'On Sale'=>$product->on_sale

          );
      }

      return Excel::download(new ExportExcelController($file),'product_data.xlsx');

    }


}
