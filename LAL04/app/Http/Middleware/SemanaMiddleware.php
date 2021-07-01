<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SemanaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        

        switch (date('w')){
            case 1:
                echo "Es Lunes";
                echo date(' j \of F Y');
                echo " Bienvenido!";
                break;
            case 2:
                echo "Es Martes";
                echo date(' j \of F Y');
                break;
            case 3:
                echo "Es Miercoles";
                echo date(' j \of F Y');
                break;
            case 4:
                echo "Es jueves";
                echo date(' j \of F Y');
                break;
            case 5:
                echo "Es viernes";
                echo date(' j \of F Y');
                break;
            case 6:
                echo "Es sabado";
                echo date(' j \of F Y');
                break;
            case 7:
                echo "Es domingo";
                echo date(' j \of F Y');
                break;
        }
        return $next($request);
    }
}
