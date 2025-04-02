<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'tenants'=> Tenants::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Tenants::create([
            'name'=>$request->name,
            'phonenumber'=>$request->phonenumber,
            'home_address'=>$request->home_address,

        ]);

        flash()->addSuccess('Tenant added successfully');

        return redirect()->route('tenantlist');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tenants $tenants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenants $tenants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenants $tenants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenants $tenants)
    {
        //
    }
}
