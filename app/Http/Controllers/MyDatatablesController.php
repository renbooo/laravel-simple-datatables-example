<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\User;

class MyDatatablesController extends Controller

{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('datatables');

    }

    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {

        return Datatables::of(User::query())->make(true);

    }

}