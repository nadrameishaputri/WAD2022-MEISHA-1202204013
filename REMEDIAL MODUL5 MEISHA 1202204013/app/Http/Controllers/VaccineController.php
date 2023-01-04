<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Controller buat nampilin/read dari database
    public function index()
    {
        return view('vaccine', [ 'vaccine' => Vaccine::all(), 'i' => 1]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addVaccine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVaccineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccine = new Vaccine;
        $vaccine->name = $request->vaccName;
        $vaccine->price = $request->price;
        $vaccine->description = $request->desc;
        $vaccine->image = $request->file('image')->store('vacc-image');
        $vaccine->save();
        return redirect('/vaccine');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = Vaccine::find($id);

        return view('updateVaccine', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVaccineRequest  $request
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vaccine = Vaccine::find($id);

        $vaccine->name = $request->vaccName;
        $vaccine->price = $request->price;
        $vaccine->description = $request->desc;

        if($request->imageNew){
            Storage::delete($vaccine->image);
            $vaccine->image = $request->file('imageNew')->store('vacc-image');
        }
        $vaccine->save();
        return view('updateVaccine', compact('vaccine'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = Vaccine::find($id);

        Storage::delete($vaccine->image);

        $vaccine->delete();

        return redirect('/vaccine');
    }

    
}
