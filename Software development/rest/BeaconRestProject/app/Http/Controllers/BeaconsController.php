<?php

namespace App\Http\Controllers;
use App\BeaconModel;
use App\ContentPerBeaconModel;
use App\BeaconContentModel;
use App\RouteModel;
use App\BeaconPerRouteModel;
use App\ContentPerBeaconPerRouteModel;
class BeaconsController extends Controller
{
    
    public function index()
    {
        $oBeacons= BeaconModel::all();
        return response()->json($oBeacons);
        
    }

    public function getBeacon($beaconId)
    {
       
        $oBeacon = BeaconModel::query()->find($beaconId);
        return $oBeacon;
    }

    public function getStaticData($beaconId)
    {
        $aContentIds = ContentPerBeaconModel::query()->where("beacon_id", "=", $beaconId)->get();
        $oStaticData;
        foreach($aContentIds as $oContentIds)
        {
        $oStaticData[]=BeaconContentModel::query()->where("beacon_content_id","=",$oContentIds->beacon_content_id)->get();
        }
        
        
        return $oStaticData;
        
    }

    public function getData($dataId)
    {
        $oData=BeaconContentModel::query()->where("beacon_content_id","=",$dataId)->get();
        return $oData;
    }

    public function getRoute($routeId)
    {
        $oRoute=RouteModel::find($routeId);
        return $oRoute;
    }

    public function getRouteData($routeId,$dataId)
    {
         $oBeaconPerRoutes=BeaconPerRouteModel::query()->where("route_id","=",$routeId)->get();
          foreach($oBeaconPerRoutes as $oBeaconPerRoute)
            {
            $data[]=ContentPerBeaconPerRouteModel::query()->where("beacon_per_route_id","=",$oBeaconPerRoute->beacon_per_route_id)->get();
            }
        return response()->json($data);
    }

}
