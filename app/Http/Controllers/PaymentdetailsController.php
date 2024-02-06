<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Paymentdetail;
use App\Http\Requests\PaymentdetailRequest;

class PaymentdetailsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-product|edit-product|delete-product', ['only' => ['index','show']]);
       $this->middleware('permission:create-product', ['only' => ['create','store']]);
       $this->middleware('permission:edit-product', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-product', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $paymentdetails= Paymentdetail::all();
        return view('paymentdetails.index', ['paymentdetails'=>$paymentdetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('paymentdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PaymentdetailRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PaymentdetailRequest $request)
    {
        $paymentdetail = new Paymentdetail;
		$paymentdetail->payment_link = $request->input('payment_link');
		$paymentdetail->payment_status = $request->input('payment_status');
        $paymentdetail->save();

        return to_route('paymentdetails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $paymentdetail = Paymentdetail::findOrFail($id);
        return view('paymentdetails.show',['paymentdetail'=>$paymentdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $paymentdetail = Paymentdetail::findOrFail($id);
        return view('paymentdetails.edit',['paymentdetail'=>$paymentdetail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PaymentdetailRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PaymentdetailRequest $request, $id)
    {
        $paymentdetail = Paymentdetail::findOrFail($id);
		$paymentdetail->payment_link = $request->input('payment_link');
		$paymentdetail->payment_status = $request->input('payment_status');
        $paymentdetail->save();

        return to_route('paymentdetails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $paymentdetail = Paymentdetail::findOrFail($id);
        $paymentdetail->delete();

        return to_route('paymentdetails.index');
    }
}
