<?php

namespace Core\middleware;

class AuthMiddleware
{
   public function __construct()
   {
   }
   public function handle($request, \Closure $next)
   {
   }
   public function execute()
   {
      // return $next($request);
      return true;
   }
}
