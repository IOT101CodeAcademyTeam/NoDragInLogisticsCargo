<?php namespace App\Http\Controllers;

use App\Models\IotDevice;
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
	public function adminStore()
	{
		//
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