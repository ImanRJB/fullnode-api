<?php

namespace FullNodeApi\Interfaces;

use Illuminate\Support\Facades\Http;

class JsonRpc
{
    private $url;

    public function __construct($network, $endpoint = null)
    {
        $this->url = $endpoint ?? config('endpoints.' . $network . '_endpoint');
    }

    public function __call($method, $params)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($this->url, [
            "jsonrpc" => "2.0",
            "method" => $method,
            "params" => $params,
            "id" => "JsonRPC"
        ]);

        return $response->json();
    }
}
