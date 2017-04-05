<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BeaconPerRouteModel extends Model 
{
    protected $table ='beacon_per_route';
    protected $fillable = [
        "beacon_per_route_id",'route_id', 'beacon_id'
    ];
    protected $primaryKey='beacon_per_route_id';
    

}
