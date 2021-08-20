<?php

namespace App\Http\Controllers;


use App\Models\ConsumerDeposit;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public  function  adminDashboard(){

//        $data =  $this->getTotalForDashboard();

        $deposits  =  ConsumerDeposit::query()->sum('amount');

        return view('dashboard');
    }



    // function to list all regions
    public  static function  getRegions(){

        $regions  =  Region::all()->toArray();

        return $regions;

    }

    // function to list all districts

    public   function  getDistricts(Request $request){

        $id  =  $request->get('id');
        $districts  =  District::where('region_id',$id)
            ->select('id','name')
            ->get();

        return $districts;

    }

    //  function that return all branch per bank
    public   function  getBranches(Request $request){


        $id  =  $request->get('id');


        $branches  =  BankBranch::where('bank_id',$id)
            ->select('id','name')
            ->get();

        return $branches;

    }




    // functions that return total data for particular table in dashboard
    public function  getTotalForDashboard(){

        $data  =[];

        $merchants  =  DB::table('merchants')->count();
        $users  =  DB::table('users')->count();
        $roles  =  DB::table('roles')->count();
        $agents  =  DB::table('agents')->count();
        $permissions  =  DB::table('permissions')->count();
        $service  =  DB::table('services')->count();
        $consumers  =  DB::table('consumers')->count();
        $active_cards  =  DB::table('cards')->where('status_id','=',1)->count();
        $permissions  =  DB::table('permissions')->count();
        $permissions  =  DB::table('permissions')->count();


        $data['merchants'] =  $merchants;
        $data['users'] =  $users;
        $data['roles'] =  $roles;
        $data['permissions'] =  $permissions;
        $data['consumers'] =  $consumers;
        $data['agents'] =  $agents;
        $data['services'] =  $service;
        $data['users'] =  $users;
        $data['users'] =  $users;
        $data['active_cards'] =  $active_cards;

        return $data;

    }





}
