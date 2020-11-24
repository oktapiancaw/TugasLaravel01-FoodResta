<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaRequest;
use App\Resta;
use Carbon\Carbon;
use PDF;

class RestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_resta = Resta::paginate(5);
        $data_info = array(
            'name' => "Data Resta",
            'total' => Resta::count(),
            'max' => Resta::max('price'),
            'min' => Resta::min('price'),
            'avg' => Resta::avg('price'),
            'type' => array(
                Resta::where('type', 'Foods')->count(),
                Resta::where('type', 'Drinks')->count(),
                Resta::where('type', 'Desserts')->count(),
            )
        );
        return view('resta.index', compact('data_resta', 'data_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resta.create', ['resta' => new Resta()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaRequest $request)
    {

        $attr = $request->all();

        $attr['created_at'] = Carbon::now();
        $attr['updated_at'] = Carbon::now();
        Resta::create($attr);

        session()->flash('success', 'Data has been added');

        return redirect('/resta');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resta  $resta
     * @return \Illuminate\Http\Response
     */
    public function edit(Resta $resta)
    {
        return view('resta.edit', compact('resta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resta  $resta
     * @return \Illuminate\Http\Response
     */
    public function update(RestaRequest $request, Resta $resta)
    {

        $attr = $request->all();
        $attr['updated_at'] = Carbon::now();
        $resta->update($attr);

        session()->flash('success', 'Data has been updated');

        return redirect('/resta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resta  $resta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resta $resta)
    {
        $resta->delete();

        session()->flash('success', 'Data has been deleted');
        return redirect('/resta');
    }
    public function exportPdf()
    {
        $data_resta = Resta::all();
        $data_info = array(
            'name' => "Data Resta",
            'total' => Resta::count(),
            'max' => Resta::max('price'),
            'min' => Resta::min('price'),
            'avg' => Resta::avg('price'),
            'type' => array(
                Resta::where('type', 'Foods')->count(),
                Resta::where('type', 'Drinks')->count(),
                Resta::where('type', 'Desserts')->count(),
            )
        );
        // return view('resta.export', compact('data_resta', 'data_info'));
        $pdf = PDF::loadview('resta/export', compact('data_resta', 'data_info'));
        return $pdf->download('DataResta.pdf');
    }
}