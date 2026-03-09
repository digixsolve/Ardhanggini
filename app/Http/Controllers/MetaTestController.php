<?php

namespace App\Http\Controllers;

use App\Services\MetaConversionApiService;
use Illuminate\Http\Request;

class MetaTestController extends Controller
{
    public function sendTestEvent(Request $request, MetaConversionApiService $metaService)
    {
        $eventId = 'test_' . uniqid();

        $eventData = [
            'event_name' => 'PageView',
            'event_time' => time(),
            'action_source' => 'website',
            'event_source_url' => url('/'),
            'event_id' => $eventId,
            'user_data' => [
                'client_ip_address' => $request->ip(),
                'client_user_agent' => $request->userAgent(),
                'fbp' => $request->cookie('_fbp'),
                'fbc' => $request->cookie('_fbc'),
            ],
        ];

        $result = $metaService->sendEvent(
            $eventData,
            config('services.meta.test_event_code')
        );

        return response()->json($result);
    }
}
