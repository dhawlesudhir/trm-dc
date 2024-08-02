<?php

namespace App\Http\Services;

use App\Abstractions\Integration\AbstractAPIIntegration;

class APICallService extends AbstractAPIIntegration
{
    private $amUrl;
    private $amAPIKey;
    private $outletId;
    private $userId;

    public function __construct()
    {
        $this->amUrl = env('AM_HOST', 'http://api.ambikamultiservices.com/API/');
        $this->amAPIKey = env('AM_APIKEY', '41ebe514e43871f7b1a128e662cc2916');
        $this->outletId = env('AM_OUTLETID', 275);
        $this->userId = env('AM_USERID', 999);
    }

    public function get(string $endpoint, array $payload = [], array $headers = []): mixed
    {
        return $this->sendGetRequest($endpoint, headers: $headers, payload: $payload);
    }

    public function post(string $endpoint, array $payload = [], array $headers = []): mixed
    {
        return $this->sendPostRequest($endpoint, headers: $headers, payload: $payload);
    }

    public function amMobilRecharge(array $payload = [], array $headers = [])
    {
        $payload = $this->loadAmDefaults($payload);
        $endpoint = 'TransactionAPI';
        return $this->get(endpoint: $endpoint, payload: $payload, headers: $headers);
    }

    public function amCheckBalance(array $payload = [], array $headers = [])
    {
        $payload = $this->loadAmDefaults($payload);
        $endpoint = 'Balance';
        return $this->get(endpoint: $endpoint, payload: $payload, headers: $headers);
    }

    public function amRefundRequest(array $payload = [], array $headers = [])
    {
        $payload = $this->loadAmDefaults($payload);
        $endpoint = 'RefundRequest';
        return $this->get(endpoint: $endpoint, payload: $payload, headers: $headers);
    }

    /**
     * if client wants to send different default payload
     *
     * @param [type] $payload
     * @return array
     */
    private function loadAmDefaults($payload): array
    {
        $this->setApiUrl($this->amUrl);
        $payload['Token'] = $payload['Token'] ?? $this->amAPIKey;
        $payload['UserID'] = $payload['UserID'] ?? $this->userId;
        $payload['OutletID'] = $payload['OutletID'] ?? $this->outletId;
        $payload['Format'] = $payload['Format'] ?? 1;
        return $payload;
    }
}
