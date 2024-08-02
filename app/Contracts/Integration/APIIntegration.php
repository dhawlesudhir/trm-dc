<?php

namespace App\Contracts\Integration;

use Illuminate\Http\Request;

interface APIIntegration
{
    /**
     * Set API endpoint URL
     *
     * @param string $url
     * @return void
     */
    public function setApiUrl(string $url): void;

    /**
     * Set API authentication credentials
     *
     * @param string $username
     * @param string $password
     * @return void
     */
    public function setApiCredentials(string $username, string $password): void;

    /**
     * Set API authentication credentials
     *
     * @param string $username
     * @param string $password
     * @return void
     */
    public function setApiKey(string $key): void;

    /**
     * Send a GET request to the API
     *
     * @param string $endpoint
     * @param array $params
     * @return mixed
     */
    public function get(string $endpoint, array $params = []);

    /**
     * Send a POST request to the API
     *
     * @param string $endpoint
     * @param array $data
     * @return mixed
     */
    public function post(string $endpoint, array $data = []);

    /**
     * Check previous API call status
     *
     * @param string $endpoint
     * @return mixed
     */
    public function checkTransactionStatus(string $method, string $endpoint, array $data = []): mixed;

    /**
     * Check if API is active
     *
     * @return bool
     */
    public function isApiActive(): bool;

    /**
     * Callback method to update responses
     *
     * @param string $endpoint
     * @param mixed $response
     * @return void
     */
    public function updateResponseCallback(Request $request): void;
}
