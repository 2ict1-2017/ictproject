<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BeaconModel extends Model 
{
    protected $table ='beacon';
    protected $fillable = [
        'beacon_id', 'location_ln', 'description_txt'
    ];
    protected $primaryKey='beacon_id';
    
 
}
