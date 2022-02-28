<?php

namespace FullNodeApi\GetBlock;

use Illuminate\Support\Facades\Http;

class GetBlockRpc
{
    private $api_key;
    private $url;

    public function __construct($network)
    {
        $url = config('endpoints.' . $network . '_endpoint');
        if (substr($url, -1) != '/') {
            $url = $url . '/';
        }
        $this->api_key      = config('getblock.api_key');
        $this->url          = $url;
    }

    public function __call($method, $params)
    {
//        return $params;
        $response = Http::withHeaders([
            'x-api-key' => $this->api_key,
            'Content-Type' => 'application/json'
        ])->post($this->url, [
            "jsonrpc" => "2.0",
            "method" => $method,
            "params" => $params,
            "id" => "getblock.io"
        ]);

        return $response->json();
    }
}
