<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Store a newly created dbplus_resolve(relation_name)urce in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'body' => 'required',
        ]);

        return redirect('/');
    }
}
