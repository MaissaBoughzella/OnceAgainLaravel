<?php namespace App\Http\Middleware;

use Closure;

class isAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next,$id)
	{  

		if(auth()->check() && $request->user()->isAdmin == 0) {
			
			return redirect()->guest('home');
		}

		return $next($request);
	}

}
