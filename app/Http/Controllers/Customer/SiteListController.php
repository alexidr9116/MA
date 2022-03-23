<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\MAController;
use App\Models\Domain;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use PDO;
use Throwable;

class SiteListController extends MAController
{
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('customer.sale-list');
    }
    public function detail(Request $req, $id){
        $domain = null;
        try{
            $domain = Domain::where('id',$id)->first();


        }
        catch(Throwable $e){

        }
        return view("customer.sale-detail",["domain"=>$domain]);

    }
    public function filter(Request $req){
        try{
            $filter = array();
            if($req->status != 0){
                array_push($filter,$req->status);
            }
            if(count($req->category)>0 && implode(",",$req->category)!=0){
                array_push($filter,implode(",",$req->category));
            }
            if(strlen($req->keywords)>0){
                array_push($filter,implode(",",$req->keywords));
            }
            $filters = "(".implode(" and ",$filter).")";
            $data = Domain::where($filter)->get();

            return view('customer.ajax-sale-list',["domains"=>$data]);
            // return response()->json(["success"=>true,"result"=>$data]);
        }
        catch(Throwable $e){

            return response()->json(["success"=>true,"result"=>$e->getMessage()]);
        }

    }
    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
    }
}
