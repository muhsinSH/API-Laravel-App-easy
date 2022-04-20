<?php

namespace App\Http\Controllers;

use App\Models\Employ;
use Illuminate\Http\Request;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$emplou=Employ::all();

if((is_null($emplou))){

    return response()->json(["message"=>"No found of Employ"],404);


}


return response()->json($emplou,200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addEmployee(Request $request) {


        $employee = Employ::create($request->all());
        return response(["message"=>"Successful  of add one Item"], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $emplous=Employ::find($id);

        if((is_null($emplous))){

            return response()->json(["message"=>"No found of Employ"],404);


        }


        return response()->json($emplous,200);



    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



$update=Employ::find($id);

if(is_null($update)){

    return response()->json(["message"=>"No Input  od value "],404);


}

$update->update($request->all());





return response()->json(["message"=>"successfuly Update "],200);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {



        $emplous=Employ::find($id);

        if((is_null($emplous))){

            return response()->json(["message"=>"No found of Employ"],404);


        }
        $emplous->delete();

        return response()->json(["message"=>"Delete successful  of Employ"],200);

    }
}
