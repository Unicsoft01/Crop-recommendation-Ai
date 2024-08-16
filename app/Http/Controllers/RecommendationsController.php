<?php

namespace App\Http\Controllers;

use App\Models\Crops;
use App\Models\Recommendations;
use Illuminate\Http\Request;

class RecommendationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Recommendations::latest()->get();
        $crops = $results->unique(['created_at']);
        // $userDuplicates = $results->diff($crops);


        // $crops = Crops::where('pH', $request->pH)->get();
        // return $crops;

        return view('recommendations.index')->with([
            'crops' => $crops,
            // 'k' => $request->potassium,
            // 'n' => $request->nitrogen,
            // 'p' => $request->phosphorus,
            // 'phh' => $request->pH
        ]);
        // return view('recommendations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // return $request;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $crops = Crops::where('pH', $request->pH)->get();
        // return $crops;

        // save user inputs for future retrive
        $data['potassium'] = $request->potassium;
        $data['nitrogen'] = $request->nitrogen;
        $data['phosphorus'] = $request->phosphorus;
        $data['pH'] = $request->pH;

        $res = Recommendations::create($data);

        return view('recommendations.recommendations')->with([
            'crops' => $crops,
            'k' => $request->potassium,
            'n' => $request->nitrogen,
            'p' => $request->phosphorus,
            'phh' => $request->pH
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recommendations $recommendations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recommendations $recommendations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recommendations $recommendations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommendations $recommendations)
    {
        //
    }
}
