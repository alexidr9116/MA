<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\MAController;
use Illuminate\Http\Request;
use App\Models\Domain;
use Throwable;
use Auth;
class SaleController extends MAController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer.sale-register');
    }
    public function store(Request $req){
        $result = "";
        try{
            $domain = new Domain;
            $domain->address = $req->address;
            // var_dump
            $domain->category = implode(",",$req->category);
            $domain->city =     $req->city;
            $domain->company =  $req->company;
            $domain->cost =     $req->cost;
            $domain->country =  $req->country;
            $domain->desired =   $req->desired;
            $domain->domain =   $req->domain;
            $domain->email =    $req->email;
            $domain->mobile =   $req->mobile;
            $domain->name =     $req->name;
            $domain->operationStart = $req->operationStart;
            $domain->pv =       $req->pv;
            $domain->operating= floatval($req->sale) - floatval($req->cost);
            $domain->reasonSale = $req->reasonSale;
            $domain->responsive = $req->responsive;
            $domain->revenue =  $req->revenue;
            $domain->sale =     $req->sale;
            $domain->state =    $req->state;
            $domain->surename = $req->surename;
            $domain->userType = $req->userType;
            $domain->webType =  $req->webType;
            $domain->zip =      $req->zip;
            $domain->seller =   Auth::user()->id;
            $domain->status =   $req->status;
            $domain->description = $req->description;
            $domain->title = $req->title;
            $domain->save();

            return response()->json(["success"=>true,"result"=>$domain]);
        }
        catch(Throwable $e){
            report($e);
            return response()->json(["success"=>false,"result"=>$e->getMessage()]);
        }


    }
}
