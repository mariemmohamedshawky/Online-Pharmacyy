<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class product extends Controller
{
    //
    
public function add_product(){



return view('admin.addpo');

}


public function show_products(){


	return view ('layouts.products');

}
public function insert_product(){

//$add_product=new product;
$productn = request("name");
//$productd= request("des");
$productdate =request("expire_date");
$productimg=request("img");
$data=array('po_name'=>$productn,"po_date"=>$productdate,"po_img"=>$productimg);
DB::table('products')->insert($data);
echo "Record inserted successfully.<br/>";

return redirect("/home");

}
}
