<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class FootballApiController extends Controller
{
    public function getFootballData()
    {
        $client = new Client();
        $response = $client->get('', [
            'headers' => [
                'Authorization' => '',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        

        return response()->json($data);
    }
}
