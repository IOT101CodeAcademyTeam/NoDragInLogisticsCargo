<?php namespace App\Http\Controllers;

use App\Models\IotDevice;
use Illuminate\Routing\Controller;

class IotDeviceController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /iotdevice
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration=[];
        $configuration ['showDelete'] = 'app.admin.devices.showDelete';
        $configuration ['list'] = IotDevice::get()->toArray();

		return view('admin.adminDevices',$configuration );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /iotdevice/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /iotdevice
	 *
	 * @return Response
	 */
	public function adminStore()
	{
        //
    }
	/**
	 * Display the specified resource.
	 * GET /iotdevice/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
        $data['device'] = IotDevice::with('deviceConnData')->find($id)->toArray();
        array_pop($data['device']['device_conn_data'][0]);

        return view('admin.adminSingle', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /iotdevice/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /iotdevice/{id}
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
	 * DELETE /iotdevice/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}