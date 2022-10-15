<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuLinkRequest;
use App\Http\Requests\UpdateMenuLinkRequest;
use App\Models\MenuLink;

class MenuLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuLinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuLink  $menuLink
     * @return \Illuminate\Http\Response
     */
    public function show(MenuLink $menuLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuLink  $menuLink
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuLink $menuLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuLinkRequest  $request
     * @param  \App\Models\MenuLink  $menuLink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuLinkRequest $request, MenuLink $menuLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuLink  $menuLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuLink $menuLink)
    {
        //
    }
}
