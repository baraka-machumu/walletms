<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProfilePermission extends Model
{

    protected $primaryKey  = ['profile_id','permission_id'];

    public $incrementing =  false;



}
