<?php

namespace App\Http\Controllers;

use App\Models\Parcels;
use Illuminate\Http\Request;

class ParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $parcels = Parcels::where('user_id', auth()->user()->id)
        ->orderBy('id', 'DESC')
         ->paginate(3);
         return view('Parcels.index', [
             'parcels' => $parcels,
         ]);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_us() 
    {
    return view('Parcels.about_us');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Parcels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->Parcels()->create([
            'origin'=>$request->origin,
            'item'=>$request->item,
            'weight'=>$request->weight,
            'destination'=>$request->destination,
            'order_date'=>$request->date,
            'type'=>$request->type,
            'receiver_number'=>$request->reciever
        ]);
        return redirect()->route('parcels.index')->with('status', 'Parcel Order Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function show(Parcels $parcels)
    {
        return view('Parcels.show', [           
            'parcels'=>$parcels
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcels $parcels)
    {
        return view('Parcels.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcels $parcels)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcels $parcels)
    {
        //
    }
}
