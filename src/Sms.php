<?php

namespace Villicah\Sms;

use Illuminate\Support\Facades\Http;

class Sms
{
    protected string $apiUrl;
    protected string $apiToken;
    protected string $senderId;

    public function __construct()
    {
        // Defaults — no env requirements
        $this->apiUrl   = 'https://sms.orlips.com/api/http/sms/send';
        $this->apiToken = '1|A7ZgKYruyhWPZpeCRObCWRWUPacVSJnvVZPBJW7Qbf9ed108';
        $this->senderId = 'ORLIPS';
    }

    public function send(string $recipient, string $message): array
    {
        $response = Http::post($this->apiUrl, [
            'api_token' => $this->apiToken,
            'recipient' => $recipient,
            'sender_id' => $this->senderId,
            'type'      => 'plain',
            'message'   => $message,
        ]);

        return $response->json() ?? [];
    }
}
