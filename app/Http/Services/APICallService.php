<?php

namespace App\Http\Services;

use App\Abstractions\Integration\AbstractAPIIntegration;

class APICallService extends AbstractAPIIntegration
{
    public function get(string $endpoint, array $payload = [], array $headers = []): mixed
    {
        return $this->sendGetRequest($endpoint, headers: $headers, payload: $payload);
    }

    public function post(string $endpoint, array $payload = [], array $headers = []): mixed
    {
        return $this->sendPostRequest($endpoint, headers: $headers, payload: $payload);
    }
}
