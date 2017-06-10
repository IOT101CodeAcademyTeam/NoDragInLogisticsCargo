<?php namespace App\Http\Controllers;

use App\Models\IotDevice;
use App\Models\IotDeviceData;
use Illuminate\Routing\Controller;

class IotDeviceDataController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /iotdevicedata
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        return view('admin.adminData');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /iotdevicedata/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /iotdevicedata
	 *
	 * @return Response
	 */
	public function adminStoreCsv()
	{
        // csv file as multidimensional array (rows)
        $csvArr = array();
        if (($handle = fopen("car.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";", '"')) !== FALSE) {
                $csvArr[] = $data;
            }
            fclose($handle);
        }

        // replaces spaces with _ and removes unused symbols like db columns
        foreach ($csvArr[0] as $key => $item) {
            $item = strtolower($item);
            $item = str_replace(' ', '_', $item);
            $item = str_replace(array( '(', ')' ), '', $item);
            $csvArr[0][$key] = $item;
        }


        // assignes csv column row as keys and forms new array
        $sqlArr = [];
        for($i = 1; $i < sizeOf($csvArr); $i++) {
            array_push($sqlArr, array_combine($csvArr[0], $csvArr[$i]));
        }

        // generates id and device_id for each entry and adds to arrays
        foreach($sqlArr as $key => $data) {

            $data['imei'] = '1111111111111';
            $data['id'] = $key;
            $sqlArr[$key] = $data;
        }

        for($i = 0; $i < sizeOf($sqlArr); $i++){

        $record = IotDeviceData::create($sqlArr[$i]);
        $record->deviceConnData()->sync($sqlArr[$i]['imei']);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /iotdevicedata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /iotdevicedata/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//IotDevice::get()->toArray();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /iotdevicedata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /iotdevicedata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}