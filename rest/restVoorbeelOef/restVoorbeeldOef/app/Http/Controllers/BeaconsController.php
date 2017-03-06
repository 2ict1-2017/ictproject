<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeaconsController extends Controller
{
    function index()
    {
      $aBeacons=  app('db')->select("SELECT * FROM beaconstabel");
        
        return response()->json($aBeacons);
    }
    function byId($id)
    {
        $aBeacons=  app('db')->select("SELECT * FROM beaconstabel where id=".$id);
            return response()->json($aBeacons);
    }
}
