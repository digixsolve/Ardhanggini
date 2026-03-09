<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MetaConversionApiService
{
    public function sendEvent(array $eventData, ?string $testEventCode = null): array
    {
        $pixelId = config('services.meta.pixel_id');
        $accessToken = config('services.meta.access_token');

        if (empty($pixelId) || empty($accessToken)) {
            return [
                'success' => false,
                'message' => 'Meta Pixel ID or Access Token is missing.',
                'response' => null,
            ];
        }

        $payload = [
            'data' => [$eventData],
        ];

        if (!empty($testEventCode)) {
            $payload['test_event_code'] = $testEventCode;
        }

        $response = Http::withToken($accessToken)
            ->post("https://graph.facebook.com/v22.0/{$pixelId}/events", $payload);

        if (!$response->successful()) {
            Log::error('Meta Conversions API failed', [
                'status' => $response->status(),
                'body' => $response->json(),
            ]);

            return [
                'success' => false,
                'message' => 'Meta Conversions API request failed.',
                'response' => $response->json(),
            ];
        }

        return [
            'success' => true,
            'message' => 'Meta event sent successfully.',
            'response' => $response->json(),
        ];
    }
}
