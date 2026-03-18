<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\SiteLogService;

class LogAcessoMiddleware
{    
    
    protected $service;
 
        public function __construct(SiteLogService $service)
        {
            $this->service = $service;
        }

        public function handle(Request $request, Closure $next): Response
        {
            $ip = $request->server->get('REMOTE_ADDR');
            $rota = $request->getRequestUri();

            $this->service->criar(['log'=>'Ip de acesso ' . $ip . ' rota ' . $rota]);
            return $next($request);
            
        }
}
