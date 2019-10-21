<?php

namespace App\Http\Middleware;

use Closure;

use App\KeyApi;

class APIkey
{
   
    public function handle($request, Closure $next)
    {
        if ($request->apikey == '') {

            return redirect('/user');
}else{
     $cust = KeyApi::where('api_key', $request->apikey)->count();

            if ($cust < 1) { 

              return response("Invalid access key");
}else{

    return $next($request);

}
}
}
}
