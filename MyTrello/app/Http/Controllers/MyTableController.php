<?php

namespace App\Http\Controllers;

use App\Models\MyTable;
use Illuminate\Http\Request;

class MyTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);
        MyTable::create($request->all());
        $title = $request['title'];
        $table = MyTable::all()->where("title", '==', $title)->first();
        return redirect()->route('tables.show', compact('table'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MyTable $table)
    {
        return view('tables.show', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyTable $table)
    {
        $request->validate([
            'title'=>'required'
        ]);
        $table->update($request->all());
        return view('tables.show', compact('table'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyTable $table)
    {
        $table->delete();
        return redirect()->route('dashboard');
    }
}
