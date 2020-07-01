<?php

namespace App\Http\Controllers;

use App\Http\Requests\Params;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaylistController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Params $request)
    {
        $API_URL = $this->buildUrl($request);

        $resp = Http::get($API_URL);

        return response()->json($resp->json());
    }

    private function buildUrl($request)
    {
        $API_KEY = 'd7bd4e8e17cb60a6308519c62fc5ac36';

        $city = $request->input('q');
        $lat = $request->input('lat');
        $lon = $request->input('lon');

        if ($city) {
            return 'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&appid='.$API_KEY;
        }

        if ($lat && $lon) {
            return 'https://api.openweathermap.org/data/2.5/weather?lat=' . $lat . '&lon=' . $lon . '&units=metric&appid='.$API_KEY;
        }
    }
}
