<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Filesystem\Cache;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class MyTestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::info("Entering MyTestMiddleware");

        // Using a Data Cache in Laravel:
        // Step 1: Get an instance of one of the Caches (in this case File Based Cache)
        // Step 2: Get a value from the Cache and if not in the Cache put a value in the Cache for
        // a specified number of minutes

        Log::info("Before not nul.....:" . $request->user_name);
        if($request->user_name != null){
            Log::info("In not null...... " . $request->user_name);
            $value = Cache::store("file")->get("mydata");
            if($value == null){
                Log::info("Caching first time Username for " . $request->user_name);
                Cache::store("file")->put("mydata", $request->user_name, 1);

            }
        }
        else{
            $value = Cache::store("file")->get("mydata");
            if($value != null){
                Log::info("Getting Username from cache " . $value);

            }
            else{
                Log::info("Could not get Username from cache (data is older than 1 minute)");
            }
        }

        return $next($request);
    }
}
