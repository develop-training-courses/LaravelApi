<?php

namespace App\Http\Controllers;

use App\Price;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

//use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Response;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //return Price::all();
        
        //response
        /*The json method will automatically set the Content-Type header to application/json, 
        as well as convert the given array to JSON using the json_encode PHP function:*/
        $prices = Price::all();
        return response()->json([
            "data" => $prices,
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
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
        $price = Price::create($request->all());
        return response()->json([
            "data" => $price,
            "message" => "El precio ha sido creado correctamente",
            "status" => Response::HTTP_ACCEPTED,
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $Price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        return response()->json([
            "data" => $price,
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $Price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $Price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $price->update($request->all());
        return response()->json([
            "data" => $price,
            "message" => "El precio fue actualizado correctamente",
            "status" =>Response::HTTP_ACCEPTED
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $Price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        /* $price->delete();
        return $price; */

        $price->delete();
        return response()->json([
            "data" => $price,
            "message" => "Precio eliminado correctamente",
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }
}
