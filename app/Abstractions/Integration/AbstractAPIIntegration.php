<?php

namespace App\Abstractions\Integration;

use App\Contracts\Integration\APIIntegration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

abstract class AbstractAPIIntegration implements APIIntegration
{
    protected $apiUrl;
    protected $username;
    protected $password;
    protected $apiKey;

    public function __construct()
    {
        // Log::shareContext([
        //     'class-name' => __CLASS__,

        // ]);
    }

    public function setApiUrl(string $url): void
    {
        $this->apiUrl = $url;
    }

    public function setApiCredentials(string $username, string $password): void
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setApiKey(string $key): void
    {
        $this->apiKey = $key;
    }

    public function logApiCall(string $endpoint, string $method, array $data = []): void
    {
        // Implement logging logic here
    }

    public function isApiActive(): bool
    {
        // Implement API active check logic here
        return false;
    }

    protected function sendPostRequest(string $endpoint, array $payload = [], array $headers = []): mixed
    {

        $url = $this->apiUrl .  $endpoint;

        Log::debug(' endpoint ' . $endpoint . ' headers', ['sendGetRequest' => $url, 'payload' => $payload, 'headers' => $headers]);
        die;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, $method ?? false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        // return response()->json(['response' => $response]);
        return $response;
    }

    protected function sendGetRequest(string $endpoint, array $payload = [], array $headers = []): mixed
    {
        $queryString = http_build_query($payload, '', '&');
        $url = $this->apiUrl .  $endpoint . '?' . $queryString;
        Log::info('endpoint ' . $endpoint . ' headers', ['sendGetRequest' => $url, 'payload' => $payload, 'headers' => $headers]);
        die;

        if ($headers) {
            $getHeaders = $headers;
        } else {
            $getHeaders = [
                'Authorization: Bearer ' . $this->apiKey,
            ];
        }

        Log::info('sendGetRequest endpoint ' . $endpoint . ' headers', ['sendGetRequest' => $url, 'payload' => $payload, 'headers' => $headers]);
        // die;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $getHeaders);

        $response = curl_exec($ch);
        curl_close($ch);

        // return response()->json(['response' => $response]);
        return $response;
    }

    public function checkTransactionStatus(string $method, string $endpoint, array $options = []): mixed
    {
    }

    public function updateResponseCallback(Request $request): void
    {
        // Implement API active check logic here
    }
}
