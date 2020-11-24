<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Resta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Resta = Resta::latest()->get();
        return response([
            'success' => true,
            'message' => 'All data resta',
            'data' => $Resta
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'stock' => 'required|integer|min:1|max:1000',
                'price' => 'required|integer|min:1000|max:10000000'
            ],
            [
                'name.required' => 'Please insert name of data!',
                'type.required' => 'Please select type of data!',
                'stock.required' => 'Please set stock of data!',
                'stock.integer' => 'Please set stock correctly!',
                'stock.min' => 'Minimum data is 1 piece',
                'stock.max' => 'Maximum data is 1000 pieces',
                'price.required' => 'Please set price of data!',
                'price.integer' => 'Please set price correctly!',
                'price.min' => 'Minimum price is Rp. 1000,00-',
                'price.max' => 'Maximum price is Rp. 10.000.000,00-',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Please insert data Correctly!',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $resta = Resta::create([
                'name'     => $request->input('name'),
                'type'   => $request->input('type'),
                'stock'   => $request->input('stock'),
                'price'   => $request->input('price')
            ]);

            if ($resta) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data has been created',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Oops! We have some trouble!',
                ], 401);
            }
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
        $resta = Resta::whereId($id)->first();


        if ($resta) {
            return response()->json([
                'success' => true,
                'message' => 'Detail data',
                'data'    => $resta
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Oops! data not found!',
                'data'    => ''
            ], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'stock' => 'required|integer|min:1|max:1000',
                'price' => 'required|integer|min:1000|max:10000000'
            ],
            [
                'name.required' => 'Please insert name of data!',
                'type.required' => 'Please select type of data!',
                'stock.required' => 'Please set stock of data!',
                'stock.integer' => 'Please set stock correctly!',
                'stock.min' => 'Minimum data is 1 piece',
                'stock.max' => 'Maximum data is 1000 pieces',
                'price.required' => 'Please set price of data!',
                'price.integer' => 'Please set price correctly!',
                'price.min' => 'Minimum price is Rp. 1000,00-',
                'price.max' => 'Maximum price is Rp. 10.000.000,00-',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Please insert data Correctly!',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $resta = Resta::whereId($request->input('id'))->update([
                'name'     => $request->input('name'),
                'type'   => $request->input('type'),
                'stock'   => $request->input('stock'),
                'price'   => $request->input('price')
            ]);

            if ($resta) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data has been updated',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Oops! We have some trouble!',
                ], 401);
            }
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
        $resta = Resta::findOrFail($id);
        $resta->delete();

        if ($resta) {
            return response()->json([
                'success' => true,
                'message' => 'Data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Oops! We have some trouble!',
            ], 400);
        }
    }
}
