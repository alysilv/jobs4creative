<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Coupon;

class CouponController extends Controller
{
    /* Generate 1 coupon code */
    public function generate($length){
        // set default character
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = '';
        for($i=0; $i<$length; $i++){
            $code .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $code;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all coupons
        $coupons = Coupon::all();
        return view('coupons.index', ['coupons' => $coupons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $length = $request->input('length');
        $nb_coupons = $request->input('nb_coupons');

        // setting up characters for coupon code
        for($i=0; $i<$nb_coupons; $i++){
            $coupon = new Coupon();
            $coupon->description = $request->input('description');
            $coupon->discount = $request->input('discount');
            $coupon->code = $this->generate($length);
            $coupon->start_date = $request->input('startdate');
            $coupon->end_date = $request->input('enddate');

            $coupon->save();
        }

        return redirect()->route('coupons.index');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
