<?php

namespace App\Http\Controllers;

use App\Http\Requests\LandlordRequest;
use App\Models\Landlord;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('landlord.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = json_decode(file_get_contents(resource_path() . "/json/banklist.json"), true);
        return view('pages.landlord.form',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandlordRequest $request)
    {
        dD($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function edit(Landlord $landlord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landlord $landlord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        //
    }
}
