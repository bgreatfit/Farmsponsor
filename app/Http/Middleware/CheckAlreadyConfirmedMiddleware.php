<?php

namespace App\Http\Middleware;

use App\Models\Bankfunding;
use Closure;

class CheckAlreadyConfirmedMiddleware
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

        if(! $request->route('deposit')){ //no deposit request
            return abort(404);
        }

        if($request->route('deposit')->approved()){

            request()->session()->flash('error', 'Funding already approved!');
            return redirect()->back();
        }
        return $next($request);
    }
}
