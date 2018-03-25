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

class deleteData extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //delete location
    function getLocation()
    {
        $data['data'] = DB::table('locations')->get();

        return view('deleteLocation',$data);
    }

    function deleteLocation($location_id)
    {
        DB::table('locations')->where('location_id',$location_id)->delete();
        
        $data['data'] = DB::table('locations')->get();

        return view('deleteLocation',$data);
    }

    //delete menu
    function getMenu()
    {
        $data['data'] = DB::table('menus')->get();

        return view('deleteMenu',$data);
    }

    function deleteMenu($menu_id)
    {
        DB::table('menus')->where('menu_id',$menu_id)->delete();
        
        $data['data'] = DB::table('menus')->get();

        return view('deleteMenu',$data);
    }

    //delete route
    function getRoute()
    {
        $data['data'] = DB::table('routes')->get();

        return view('deleteRoute',$data);
    }

    function deleteRoute($route_id)
    {
        DB::table('routes')->where('route_id',$route_id)->delete();
        
        $data['data'] = DB::table('routes')->get();

        return view('deleteRoute',$data);
    }

    //delete seller
    function getSeller()
    {
        $data['data'] = DB::table('sellers')->get();

        return view('deleteSeller',$data);
    }

    function deleteSeller($seller_id)
    {
        DB::table('sellers')->where('seller_id',$seller_id)->delete();
        
        $data['data'] = DB::table('sellers')->get();

        return view('deleteSeller',$data);
    }

    //delete sender
    function getSender()
    {
        $data['data'] = DB::table('senders')->get();

        return view('deleteSender',$data);
    }

    function deleteSender($sender_id)
    {
        DB::table('senders')->where('sender_id',$sender_id)->delete();
        
        $data['data'] = DB::table('senders')->get();

        return view('deleteSender',$data);
    }

    //delete store
    function getStore()
    {
        $data['data'] = DB::table('stores')->get();

        return view('deleteStore',$data);
    }

    function deleteStore($store_id)
    {
        DB::table('stores')->where('store_id',$store_id)->delete();
        
        $data['data'] = DB::table('stores')->get();

        return view('deleteStore',$data);
    }
}
