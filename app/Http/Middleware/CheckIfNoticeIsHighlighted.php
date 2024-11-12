<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Notice;

class CheckIfNoticeIsHighlighted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $notice_id = $request->route('id');
        $notice = Notice::find($notice_id);

        if (!$notice || $notice->highlighted_id != 1) {
            return redirect()->route('dashboard')
                ->withError('Este anuncio ya cuenta con un servicio de pago.');
        }


        return $next($request);
    }
}
