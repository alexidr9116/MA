<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use PDO;
use Throwable;
use Auth;

class HomeController extends MAController
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
        $data = Domain::orderBy("created_at","desc")->get();
        return view('welcome',["domains"=>$data]);
    }
    public function profile(Request $request)
    {
        return view('profile');
    }
    public function profileStore(Request $req){
        try{
            $req->validate([
                'file' => 'required',
            ]);
            $req->firstName;
            $req->lastName;
            $req->gender;
            $name = time().'.'.request()->file->getClientOriginalExtension();
            $req->file->move(public_path('uploads'), $name);

            $user = User::where('id',Auth::user()->id)->first();
            $user->firstName= $req->firstName;
            $user->lastName=$req->lastName;
            $user->gender=$req->gender;
            $user->avatar =$name;
            $user->birthday=$req->birthday;
            $user->save();
            return response()->json(['success'=>true,"user"=>$user]);
        }
        catch(Throwable $e){
            return response()->json(['success'=>false]);
        }


    //    $file = new FileUpload;
    //    $file->name = $name;
    //    $file->save();


    }
    public function store(Request $request)
    {
    }
}
