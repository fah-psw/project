<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResourecs;
use DB;

header("Access-Control-Allow-Origin:*");
header("Content_type: application/json; charset=UTF-8");

class getData extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //get menu data
    function getMenu()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM menus");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
            "menu_id" => $row["menu_id"],
         "menu_name" => $row["menu_name"],
         "price" => $row["price"],
         "store" => $row["store"]
         )
         );
         }
        echo json_encode($json_return);
    }

    //get sender data
    function getSender()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM senders");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
         "sender_id" => $row["sender_id"],
         "username" => $row["username"],
         "password" => $row["password"],
         "name" => $row["name"],
         "route" => $row["route"],
         )
         );
         }
        echo json_encode($json_return);
    }

    //get location data
    function getLocation()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM locations");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
            "location_id" => $row["location_id"],
         "name" => $row["name"],
         "route" => $row["route"]
         )
         );
         }
        echo json_encode($json_return);
	}

	//get route data
    function getRoute()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM routes");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
            "route_id" => $row["route_id"],
         "descr" => $row["descr"]
         )
         );
         }
        echo json_encode($json_return);
	}

	//get seller data
    function getSeller()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM sellers");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
        "seller_id" => $row["seller_id"],
         "username" => $row["username"],
         "password" => $row["password"],
         "name" => $row["name"],
         "store" => $row["store"]
         )
         );
         }
        echo json_encode($json_return);
	}

	//get store data
    function getStore()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return = array();
         $query = mysqli_query($connect, "SELECT * FROM stores");
         while ($row = mysqli_fetch_assoc($query)) {
         array_push($json_return, 
         array(
         "store_id"=> $row["store_id"],
         "store_name" => $row["store_name"]
         )
         );
         }
        echo json_encode($json_return);
	}

	//get order data
    function getOrder()
    {
        $connect = mysqli_connect("localhost", "root", "abcd1108") or die(mysqli_error());
         mysqli_select_db($connect, "coop") or die (mysqli_error($connect));
         mysqli_query($connect, "SET NAMES utf8");
         $json_return1 = array();
         $query1 = mysqli_query($connect, "SELECT * FROM orders");
         while ($row = mysqli_fetch_assoc($query1)) {
         array_push($json_return1, 
         array(
         "order_id" => $row["order_id"],
         "store" => $row["store"],
         "menu" => $row["menu"],
         "amount" => $row["amount"],
         "add" => $row["add"],
         "cus_name" => $row["cus_name"],
         "cus_phone" => $row["cus_phone"],
         "totalprice" => $row["totalprice"],
         "status" => $row["status"],
         "location" => $row["location"]
         )
         );
         }
         
        echo json_encode($json_return1);
	}

    

}
