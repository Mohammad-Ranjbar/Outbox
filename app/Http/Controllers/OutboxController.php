<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutboxRequest;
use App\Http\Requests\UpdateOutboxRequest;
use App\Models\Outbox;

class OutboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutboxRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Outbox $outbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outbox $outbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutboxRequest $request, Outbox $outbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outbox $outbox)
    {
        //
    }
}
