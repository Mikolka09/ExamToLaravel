<?php

namespace App\Http\Controllers;

use App\Models\MyColumn;
use App\Models\MyTable;
use Illuminate\Http\Request;

class MyColumnController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'table_id' => 'required',
        ]);
        $id = $request['table_id'];
        $table = MyTable::all()->where('id','==',$id)->first();
        MyColumn::create($request->all());
        return redirect()->route('tables.show', compact('table'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyColumn $column)
    {
        $request->validate([
            'title' => 'required',
            'table_id' => 'required',
        ]);
        $column->update($request->all());
        $id = $request['table_id'];
        $table = MyTable::all()->where('id','==',$id)->first();
        return redirect()->route('tables.show', compact('table'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MyColumn $column)
    {
        $id = $request['table_id'];
        $column->delete();
        $table = MyTable::all()->where('id','==',$id)->first();
        return redirect()->route('tables.show', compact('table'));
    }
}
