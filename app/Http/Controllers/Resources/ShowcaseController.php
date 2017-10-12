<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use Illuminate\Http\Request;
use Validator;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Showcase::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:showcases|max:255'
        ]);
        
        if ($validator->fails()) {    
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        $showcase = Showcase::create(["title" => $request->title]);

        return $showcase;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Showcase  $showcase
     * @return \Illuminate\Http\Response
     */
    public function show(Showcase $showcase)
    {
        return $showcase;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Showcase  $showcase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showcase $showcase)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'unique:showcases|max:255'
        ]);

        if ($validator->fails()) {    
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        $showcase->title = $request->title;
        $showcase->save();
        
        return $showcase;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Showcase  $showcase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showcase $showcase)
    {

    }
}
