<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('🔍 AdminMiddleware çalıştı.');

        if (!Auth::check()) {
            Log::warning('❌ Kullanıcı giriş yapmamış, login sayfasına yönlendiriliyor.');
            return redirect()->route('admin.login');
        }

        Log::info('🔐 Kullanıcı giriş yapmış: ' . Auth::user()->email);

        if (Auth::user()->role !== 'admin') {
            Log::error('🚫 Yetkisiz kullanıcı erişim denedi: ' . Auth::user()->role);
            abort(403, 'Bu alana erişim izniniz yok.');
        }

        Log::info('✅ AdminMiddleware geçti, admin yetkisi onaylandı.');

        return $next($request);
    }
}
