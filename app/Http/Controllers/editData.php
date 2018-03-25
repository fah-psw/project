<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResourecs;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class editData extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //edit location
    function getLocation()
    {
        $data['data'] = DB::table('locations')->get();

        return view('showLocation',$data);
    }

    function editLocation($location_id)
    {
        $data['data'] = DB::table('locations')->where('location_id',$location_id)->get();
        return view('editLocation',$data);
    }

    function updateLocation(Request $request)
    {
        $location_id = $request->input('location_id');
        $name = $request->input('name');
        $route = $request->input('route');
    
        $data = array('location_id'=>$location_id,'name'=>$name,'route'=>$route);
        DB::table('locations')->where('location_id',$request->location_id)->update($data);

        $data['data'] = DB::table('locations')->get();
        return view('showLocation',$data);
    }

    //edit menu
    function getMenu()
    {
        $data['data'] = DB::table('menus')->get();

        return view('showMenu',$data);
    }

    function editMenu($menu_id)
    {
        $data['data'] = DB::table('menus')->where('menu_id',$menu_id)->get();
        return view('editMenu',$data);
    }

    function updateMenu(Request $request)
    {
        $menu_id = $request->input('menu_id');
        $menu_name = $request->input('menu_name');
        $price = $request->input('price');
        $store = $request->input('store');
    
        $data = array('menu_id'=>$menu_id,'menu_name'=>$menu_name,'price'=>$price,'store'=>$store);
        DB::table('menus')->where('menu_id',$request->menu_id)->update($data);

        $data['data'] = DB::table('menus')->get();
        return view('showMenu',$data);
    }

    //edit route
    function getRoute()
    {
        $data['data'] = DB::table('routes')->get();

        return view('showRoute',$data);
    }

    function editRoute($route_id)
    {
        $data['data'] = DB::table('routes')->where('route_id',$route_id)->get();
        return view('editRoute',$data);
    }

    function updateRoute(Request $request)
    {
        $route_id = $request->input('route_id');
        $descr = $request->input('descr');
    
        $data = array('route_id'=>$route_id,'descr'=>$descr);
        DB::table('routes')->where('route_id',$request->route_id)->update($data);

        $data['data'] = DB::table('routes')->get();
        return view('showRoute',$data);
    }

    //edit seller
    function getSeller()
    {
        $data['data'] = DB::table('sellers')->get();

        return view('showSeller',$data);
    }

    function editSeller($seller_id)
    {
        $data['data'] = DB::table('sellers')->where('seller_id',$seller_id)->get();
        return view('editSeller',$data);
    }

    function updateSeller(Request $request)
    {
        $seller_id = $request->input('seller_id');
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $store = $request->input('store');
    
        $data = array('seller_id'=>$seller_id,'username'=>$username,'password'=>$password,'name'=>$name,'store'=>$store);
        DB::table('sellers')->where('seller_id',$request->seller_id)->update($data);

        $data['data'] = DB::table('sellers')->get();
        return view('showSeller',$data);
    }

    //edit sender
    function getSender()
    {
        $data['data'] = DB::table('senders')->get();

        return view('showSender',$data);
    }

    function editSender($sender_id)
    {
        $data['data'] = DB::table('senders')->where('sender_id',$sender_id)->get();
        return view('editSender',$data);
    }

    function updateSender(Request $request)
    {
        $sender_id = $request->input('sender_id');
        $username = $request->input('username');
        $password = $request->input('password');
        $name = $request->input('name');
        $route = $request->input('route');
    
        $data = array('sender_id'=>$sender_id,'username'=>$username,'password'=>$password,'name'=>$name,'route'=>$route);
        DB::table('senders')->where('sender_id',$request->sender_id)->update($data);

        $data['data'] = DB::table('senders')->get();
        return view('showSender',$data);
    }

    //edit store
    function getStore()
    {
        $data['data'] = DB::table('stores')->get();

        return view('showStore',$data);
    }

    function editStore($store_id)
    {
        $data['data'] = DB::table('stores')->where('store_id',$store_id)->get();
        return view('editStore',$data);
    }

    function updateStore(Request $request)
    {
        $store_id = $request->input('store_id');
        $store_name = $request->input('store_name');
    
        $data = array('store_id'=>$store_id,'store_name'=>$store_name);
        DB::table('stores')->where('store_id',$request->store_id)->update($data);

        $data['data'] = DB::table('stores')->get();
        return view('showStore',$data);
    }

    function updateStatus(Request $request)
    {
        $data = json_decode($_POST['data'], true);

        $stmt = $this->conn->prepare("INSERT INTO 'orders' WHERE order_id = \"{$data['order_id']}\" ('status') 
            VALUES (\"{$data['status']}\""); 
        $stmt->execute();
    }

}
