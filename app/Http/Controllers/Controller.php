<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\DropChoice;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(Request $req)
    {
        $categories = DropChoice::where('type','category')->orderBy('id')->get();
        $countries =  DropChoice::where('type','country')->orderBy('id')->get();
        $revenues =  DropChoice::where('type','revenue')->orderBy('id')->get();
        $types =  DropChoice::where('type','type')->orderBy('id')->get();
        $reasons =  DropChoice::where('type','reason')->orderBy('id')->get();
        view()->share('categories',$categories);
        view()->share('countries',$countries);
        view()->share('revenues',$revenues);
        view()->share('types',$types);
        view()->share('reasons',$reasons);
    }


}
