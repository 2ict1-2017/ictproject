<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class ContentPerBeaconPerRouteModel extends Model 
{
    protected $table ='content_per_beacon_per_route';
    protected $fillable = [
        'beacon_content_id', 'beacon_per_route_id'
    ];
    
 protected $primaryKey = ['beacon_content_id', 'beacon_per_route_id'];
public $incrementing = false;
}
