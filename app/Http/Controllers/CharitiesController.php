<?php

namespace App\Http\Controllers;

use App\Models\Charity;
use Illuminate\Http\Request;
use App\Http\Requests\Charities\CharityStoreRequest;
use App\Http\Requests\Charities\CharityUpdateRequest;

class CharitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // view()
        return "views.charities.index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view()
        return "views.charities.create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharityStoreRequest $request)
    {
        $charity = Charity::create($request->validated());
        // redirect with success
        return $charity;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        // view() with $charity
        return "views.charities.show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // view()
        return "views.charities.edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharityUpdateRequest $request, Charity $charity)
    {
        $charity->fill($request->validated());
        $charity->save();
        // return redirect
        return $charity;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charity $charity)
    {
        return $charity->delete();
    }
}
