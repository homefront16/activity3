<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class MySecurityMiddleWare
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
        // Step 1: You can use the following to get the route URI $request->path()
        // or you can also use the $request->is();
        $path = $request->path();
        Log::info("Entering My Security Middleware in handle() at path: " . $path);

        // Step 2: Run the business rules that check all URI's that you do not need to secure
        // insecure routes: Root Route, Login and Login POST Route, User REST Service Route
        // DO NOT preface the pattern wiht a / as this is basically a REGEX expression so
        // slash would interfere with the pattern matching
        $secureCheck = true;
        if($request->is('/') || $request->is('login') || $request->is('dologin') ||
        $request->is('usersrest') || $request->is('usersrest/*') ||
        $request->is('loggingservice') || $request->is('restclient')){
            $secureCheck = false;
            Log::info($secureCheck ? " Security MIiddleware in handle()..... Needs Security" :
                "Security Middleware in handle()..... No Security Required");

            Log::info("This is the session in middleware: " . session()->get('security'));
            if(session()->get('security') == 'enabled'){
                return $next($request);
            }
            if($secureCheck){
                Log::info("Leaving my Security Middleware in handle() doing a redirect back to login");
                return redirect('/login');
            }
        }


        return $next($request);
    }
}
