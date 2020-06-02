<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = array(
            'breadcrumbs' => [
                'dashboard' => [
                    'active' => false,
                    'url' => route('dashboard')
                ],
                'properties' => [
                    'active' => true,
                    'url' => route('properties.index')
                ]
            ],
            'title' => 'Properties'
        );

        $data['properties'] = Property::all();
        
        return view('contents.properties', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'type' => 'required',
            'rent' => 'required'
        ]);

        $property = new Property;
        $property->name = $request->name;
        $property->address = $request->address;
        $property->type = $request->type;
        $property->rent = $request->rent;
        $property->save();

        if($property){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => array(
                        'msg' => 'New property successfully added'
                    )
                )
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $property = Property::find($id)->first();

        if($property){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => $property
                )
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->name = $request->name;
        $property->address = $request->address;
        $property->type = $request->type;
        $property->rent = $request->rent;
        $property->save();

        if($property){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => array(
                        'msg' => 'Propery successfully updated'
                    )
                )
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        if($property){
            return response()->json(
                array(
                    'request_status' => 'ok',
                    'request_details' => array(
                        'msg' => 'Property successfully deleted'
                    )
                )
            );
        }
    }
}
