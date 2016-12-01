<?php

namespace Walker\Http\Controllers;

use Illuminate\Http\Request;
use MaxMind\Db\Reader;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ip_db_reader = new Reader(resource_path('GeoLite2-City.mmdb'));
        $location_data = $ip_db_reader->get($request->ip());
        $ip_db_reader->close();
        $latitude = $location_data['location']['latitude'] or 55.751574;
        $longitude = $location_data['location']['longitude'] or 37.573856;
        return view('home',['latitude' => $latitude, 'longitude' => $longitude]);
    }
}
