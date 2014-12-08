<?php

class AirplanesController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $term
	 * @return Response
	 */
	public function show($term)
	{
		$airplanes = DB::table('airplanes')
			->where('registration', 'LIKE', '%' . $term . '%')
			->orWhere('operator', 'LIKE', '%' . $term . '%')
			->orWhere('manufacturer', 'LIKE', '%' . $term . '%')
			->orWhere('type', 'LIKE', '%' . $term . '%')
			->get();

		return Response::json($airplanes, 200);
	}

}
