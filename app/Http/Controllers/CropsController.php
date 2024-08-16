<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Crops;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Crops::latest()->get();
        $crops = $results->unique(['botanicalName']);
        $userDuplicates = $results->diff($crops);
        // return $crops;

        return view('crops.index
        ')->with(['crops' => $crops]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Crops $crops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crops $crops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crops $crops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crops $crops, $id)
    {
        DB::table('crops')->where('id', $id)->delete();
        return redirect()->route('crops.index');
    }
}
