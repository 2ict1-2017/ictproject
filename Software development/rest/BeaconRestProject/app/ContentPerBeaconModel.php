<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class ContentPerBeaconModel extends Model 
{
    protected $table ='content_per_beacon';
    protected $fillable = [
        'beacon_content_id', 'beacon_id'
    ];
    
 protected $primaryKey = ['beacon_content_id', 'beacon_id'];
public $incrementing = false;
}
