<?php namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Routing\Controller;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /api
	 *
	 * @return Response
	 */
	public function index()
	{
        $client = new Client();
        $res = $client->get('https://iot101.teliacompany.com/api/v1/device/3973/', [
            'auth' =>  ['code-academy', 'iot101']
        ]);
        $res->getStatusCode();           // 200
        // echo $res->getHeader('content-type');
        $array = json_decode($res->getBody()->getContents(), true);                 // {"type":"User"...'
        return $array;
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