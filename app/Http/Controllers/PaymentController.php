<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();

        return response()->json([
            "data"   => $payments,
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
        $payment = Payment::create($request->all());
        return response()->json([
            "data"    => $payment,
            "message" => "Payment created successfully!",
            "status"  => Response::HTTP_ACCEPTED
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return response()->json([
            "data" => $payment,
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return response()->json([
            "data" => $payment,
            "message" => "Payment updated successfully!",
            "status" =>Response::HTTP_ACCEPTED
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json([
            "data" => $payment,
            "message" => "Payment deleted successfully!",
            "status" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }
}
