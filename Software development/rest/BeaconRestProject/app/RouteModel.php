<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RouteModel extends Model 
{
    protected $table ='route';
    protected $fillable = [
        'route_id', 'name_ln'
    ];
    protected $primaryKey='route_id';
    

}
