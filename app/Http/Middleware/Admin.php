<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        // ตรวจสอบว่าผู้ใช้ login และเป็น admin
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')
                           ->with('error', 'Please Login First!');
        }

        return $next($request);
    }
}
