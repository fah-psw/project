<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResourecs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

header("Access-Control-Allow-Origin:*");
header("Content_type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS,PUT,DELETE");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers:Origin, X-Requested-With,Content-type,Accept");


class addData extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //add menu data
    function addMenu(Request $req)
    {
        $menu_name = $req->input('menu_name');
        $price = $req->input('price');
        $store = $req->input('store');

        $data = array('menu_name'=>$menu_name,"price"=>$price,"store"=>$store);

        DB::table('menus')->insert($data);

        echo "Success";
        return view('addMenu');
    }

    //add sender data
    function addSender(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $name = $req->input('name');
        $route = $req->input('route');

        $data = array('username'=>$username,'password'=>$password,'name'=>$name,'route'=>$route);

        DB::table('senders')->insert($data);

        echo "Success";
    }

    //add location data
    function addLocation(Request $req)
    {
        $name = $req->input('name');
        $route = $req->input('route');

        $data = array('name'=>$name,"route"=>$route);

        DB::table('locations')->insert($data);

        echo "Success";
	}

	//add route data
    function addRoute(Request $req)
    {
        $descr = $req->input('descr');

        $data = array('descr'=>$descr);

        DB::table('routes')->insert($data);

        echo "Success";
	}

	//add seller data
    function addSeller(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $name = $req->input('name');
        $store = $req->input('store');

        $data = array('username'=>$username,'password'=>$password,'name'=>$name,'store'=>$store);

        DB::table('sellers')->insert($data);

        echo "Success";
	}

	//add store data
    function addStore(Request $req)
    {
        $store_name = $req->input('store_name');

        $data = array('store_name'=>$store_name);

        DB::table('stores')->insert($data);

        echo "Success";
	}


    function addOrder(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $postdata = file_get_contents("php://input");
            $request = json_decode($postdata);
            $menu = $request->menu;
            $totalprice = $request->totalprice;
            $amount = $request->amount;
            $add = $request->add;
            $cus_name = $request->cus_name;
            $cus_phone = $request->cus_phone;
            $location = $request->location;
            $store = $request->store;

            $data = array('menu'=>$menu, 'amount'=>$amount, 'add'=>$add, 'totalprice'=>$totalprice, 'cus_name'=>$cus_name, 'cus_phone'=>$cus_phone, 'location'=>$location, 'store'=>$store);
            DB::table('orders')->insert($data);
        }
        else
        {
            echo "Not allowed";
        }
    }


	//add order data
    function addOrders()
    {
        if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
 
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
 
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
 
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
 
        exit(0);
    }
 
 
    //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
    $postdata = file_get_contents("php://input");
    if (isset($postdata)) {
        $request = json_decode($postdata);
        $menu = $request->menu;
        $price = $request->price;
        $amount = $request->amount;
        $add = $request->add;
        $cus_name = $request->cus_name;
        $cus_phone = $request->cus_phone;
        $location = $request->location;
        $store = $request->store;
 
        if ($menu != "") {
            echo "Server returns: " . $menu;
        }
        else {
            echo "Empty username parameter!";
        }
    }
    else {
        echo "Not called properly with username parameter!";
    }
	}

    function test(){
        $data = array(
            'post' => $_POST
            );
        echo json_encode($data);
    }
}
