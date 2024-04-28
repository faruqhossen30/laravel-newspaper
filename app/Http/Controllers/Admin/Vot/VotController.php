<?php

namespace App\Http\Controllers\Admin\Vot;

use App\Http\Controllers\Controller;
use App\Models\Admin\Vot\Vot;
use Illuminate\Http\Request;

class  VotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vots = Vot::latest()->paginate(10);
        return view('admin.vot.index',compact('vots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',

        ], [
            'description.required' => 'Please enter your description ',
            'start_date.required'  => 'Please enter your start_date ',
            'end_date.required'    => 'Please enter your end_date',

        ]);
        Vot::create([

            'description' => $request->description,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
        ]);
        // return "ok";
        return redirect()->route('vot.index')->with('success', 'successfully data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vot = Vot::findOrFail($id);
        return view('admin.vot.edit', compact('vot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Vot::where('id', $id)->update([

            'description' => $request->description,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,


        ]);
        return redirect()->route('vot.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vot::findOrFail($id)->delete();
        return redirect()->route('vot.index')->with('delete', 'Successfully Data delete');
    }
}
