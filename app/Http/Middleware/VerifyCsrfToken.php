<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class VerifyCsrfToken extends Middleware
{


    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];

    


    public function handle($request, Closure $next)
    {
        if(!FacadesAuth::check() && $request->route()->named('logout')) {
        
            $this->except[] = route('logout');
            
        }
        
        return parent::handle($request, $next);
    }
}
