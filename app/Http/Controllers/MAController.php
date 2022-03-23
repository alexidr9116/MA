<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DropChoice;
class MAController extends Controller
{

    public function __construct()
    {
        $categories = DropChoice::where('type','category')->orderBy('id')->get();
        $countries =  DropChoice::where('type','country')->orderBy('id')->get();
        $revenues =  DropChoice::where('type','revenue')->orderBy('id')->get();
        $types =  DropChoice::where('type','type')->orderBy('id')->get();
        $reasons =  DropChoice::where('type','reason')->orderBy('id')->get();
        $status =  DropChoice::where('type','status')->orderBy('id')->get();
        view()->share('categories',$categories);
        view()->share('countries',$countries);
        view()->share('revenues',$revenues);
        view()->share('types',$types);
        view()->share('reasons',$reasons);
        view()->share('status',$status);
    }


}
