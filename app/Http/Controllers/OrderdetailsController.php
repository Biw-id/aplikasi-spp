<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Orderdetail;
use App\Models\User;
use App\Http\Requests\OrderdetailRequest;

class OrderdetailsController extends Controller
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
        $orderdetails= Orderdetail::all();
        return view('orderdetails.index', ['orderdetails'=>$orderdetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('orderdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderdetailRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderdetailRequest $request)
    {
        $orderdetail = new Orderdetail;
		$orderdetail->user_id = $request->input('user_id');
		$orderdetail->product_id = $request->input('product_id');
		$orderdetail->payment_id = $request->input('payment_id');
        $orderdetail->save();

        return to_route('orderdetails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $orderdetail = Orderdetail::findOrFail($id);
        return view('orderdetails.show',['orderdetail'=>$orderdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $orderdetail = Orderdetail::findOrFail($id);
        return view('orderdetails.edit',['orderdetail'=>$orderdetail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderdetailRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OrderdetailRequest $request, $id)
    {
        $orderdetail = Orderdetail::findOrFail($id);
		$orderdetail->user_id = $request->input('user_id');
		$orderdetail->product_id = $request->input('product_id');
		$orderdetail->payment_id = $request->input('payment_id');
        $orderdetail->save();

        return to_route('orderdetails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $orderdetail = Orderdetail::findOrFail($id);
        $orderdetail->delete();

        return to_route('orderdetails.index');
    }
}
