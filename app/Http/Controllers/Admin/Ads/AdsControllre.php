<?php

namespace App\Http\Controllers\Admin\Ads;

use App\Http\Controllers\Controller;
use App\Models\Admin\Ads\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdsControllre extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ads = Ads::first();
        return view('admin.ads.create', compact('ads'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [];

        if ($request->file('header_ads')) {

            $file_name = $request->file('header_ads')->store('/Ads/header_ads');

            $data['header_ads'] = $file_name;
        }

        if ($request->file('post_ads')) {
            $file_name = $request->file('post_ads')->store('/Ads/post_ads');
            $data['post_ads'] = $file_name;
        }
        if ($request->file('footer_ads')) {
            $file_name = $request->file('footer_ads')->store('/Ads/footer_ads');
            $data['footer_ads'] = $file_name;
        }
        if ($request->file('sidebar_ads')) {
            $file_name = $request->file('sidebar_ads')->store('/Ads/sidebar_ads');
            $data['sidebar_ads'] = $file_name;
        }

        Ads::updateOrInsert([
            'id' => 1
        ], $data);
        return redirect()->back()->with('success', 'successfully data added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
