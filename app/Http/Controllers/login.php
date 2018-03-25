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

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

class login extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function loginSender()
    {
    
        mysqli_connect("localhost", "root", "abcd1108", "coop")
        
        $username=$_GET["e"];
        $password=$_GET["p"];
        
        $username = stripslashes($username);
        $password = stripslashes($password);
 
        
        $query="SELECT sender_id, username, password, name, route FROM senders  
                where username like '".$username."' and password like '".$password."'";
        $result = $conn->query($query);
        $outp = "";
        
        if( $rs=$result->fetch_array(MYSQLI_ASSOC)) {
            if ($outp != "") {$outp .= ",";}
            $outp .= '{"sender_id":"'  . $rs["sender_id"] . '",';
            $outp .= '"username":"'   . $rs["username"]        . '",';
            $outp .= '"password":"'   . $rs["password"]        . '",';
            $outp .= '"name":"'   . $rs["name"]        . '",';
            $outp .= '"route":"'. $rs["route"]     . '"}';
        }
        $outp ='{"records":'.$outp.'}';
        $conn->close();
 
        echo($outp);
    }
}
?>