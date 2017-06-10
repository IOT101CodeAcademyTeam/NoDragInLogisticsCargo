<?php namespace App\Http\Controllers;

use App\Models\IotDeviceData;
use GuzzleHttp\Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /api
	 *
	 * @return Response
	 */
	        public function saveApiData()
    {
        $iot101 = new IotDeviceData();
        $iot101Keys = $iot101->getFillable();

        //we will fetch this array to database
        $apiArr = [];

        //keys to ignore from returned array via API
        $ignoreKeys = [
            'href',
            'journeys',
            'data',
            'name',
            'folder',
            'type_id',
            'map_id',
            'input_setup',
            'static_location',
            'icon_id',
            'driver_id',
            'notes',
            'meta',
            'group'
        ];

        // receive data from API
        $client = new Client();
        $res = $client->get('https://iot101.teliacompany.com/api/v1/device/3973/', [
            'auth' =>  ['code-academy', 'iot101']
        ]);
        // echo $res->getStatusCode();           // 200
        // echo $res->getHeader('content-type');
        $array = json_decode($res->getBody()->getContents(), true);                 // {"type":"User"...'
        // return $array;

        // fills array with values before writing to db
        $apiArr = [];
        foreach ($array as $key => $param) {
            if(!in_array($key, $ignoreKeys)) {
                if(!is_array($param)) {
                    $apiArr[$key] = $param;
                } else {
                    foreach($param as $key2 => $value) {
                        $apiArr[$key2] = $value;
                    }
                }
            }
        }
        // return $iot101Keys;

        // TODO reset keys in similar manner according to api manual and our database
        $apiArr['server_time'] = $apiArr['0'];
        unset($apiArr['0']);

        $apiArr['device_time'] = $apiArr['1'];
        unset($apiArr['1']);

        $apiArr['latitude'] = $apiArr['2'];
        unset($apiArr['2']);

        $apiArr['longitude'] = $apiArr['3'];
        unset($apiArr['3']);

        $apiArr['speed'] = $apiArr['4'];
        unset($apiArr['4']);

        $apiArr['bearing'] = $apiArr['5'];
        unset($apiArr['5']);

        $apiArr['number_of_satellites'] = $apiArr['6'];
        unset($apiArr['6']);

        $apiArr['battery_level'] = $apiArr['10'];
        unset($apiArr['10']);

        $apiArr['HDOP_from_gps'] = $apiArr['14'];
        unset($apiArr['14']);

        $apiArr['running'] = $apiArr['100'];
        unset($apiArr['100']);

        $apiArr['battery_voltage'] = $apiArr['110'];
        unset($apiArr['110']);

        $apiArr['charging'] = $apiArr['115'];
        unset($apiArr['115']);

        $apiArr['GSM_signal_strenght'] = $apiArr['130'];
        unset($apiArr['130']);

        $apiArr['network_operator'] = $apiArr['131'];
        unset($apiArr['131']);

        $apiArr['odometer'] = $apiArr['136'];
        unset($apiArr['136']);

        $apiArr['satellites'] = $apiArr['138'];
        unset($apiArr['138']);

        $apiArr['alarm'] = $apiArr['170'];
        unset($apiArr['170']);

        $apiArr['???'] = $apiArr['190'];
        unset($apiArr['190']);

        $apiArr['temperature'] = $apiArr['200'];
        unset($apiArr['200']);

        $apiArr['humidity'] = $apiArr['220'];
        unset($apiArr['220']);

        $apiArr['digital_input1'] = $apiArr['400'];
        unset($apiArr['400']);

        $apiArr['digital_input2'] = $apiArr['401'];
        unset($apiArr['401']);

        $apiArr['digital_input3'] = $apiArr['402'];
        unset($apiArr['402']);



        return $apiArr;




        /*$value = Cache::get('test');
        dd($value);*/
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /api/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /api
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /api/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /api/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /api/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /api/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}