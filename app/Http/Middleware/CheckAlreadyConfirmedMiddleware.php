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
//        return die($request->route('deposit'));
//        $deposit = Bankfunding::find($request->route('deposit'));
        if(! $request->route('deposit')){
            return abort(404);
        }

        if($request->route('deposit')->approved()){

            request()->session()->flash('error', 'Deposit already approved!');
            return redirect()->back();
        }
        return $next($request);
    }
}
