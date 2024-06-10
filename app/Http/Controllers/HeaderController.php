<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headers = Header::all();

        return view('header.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('header.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        Header::create($input);

        return redirect('/admin/header')->with('message', 'Data successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        return view('header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $request->validate([
            'title' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $header->update($input);

        return redirect('/admin/header')->with('message', 'Data successfully edited');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        $header->delete();

        return redirect('/admin/header')->with('message', 'Data successfully delete');
    }
}
