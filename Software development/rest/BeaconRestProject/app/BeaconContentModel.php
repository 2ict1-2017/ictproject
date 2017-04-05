<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class BeaconContentModel extends Model 
{
    protected $table ='beacon_content';
    protected $fillable = [
        'beacon_content_id', 'metatype_sn','presentationNumber','content_txt'
    ];
    protected $primaryKey='beacon_content_id';
 
}
