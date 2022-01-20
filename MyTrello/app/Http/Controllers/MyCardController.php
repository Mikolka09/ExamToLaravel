<?php

namespace App\Http\Controllers;

use App\Models\MyCard;
use App\Models\MyColumn;
use App\Models\MyTable;
use Illuminate\Http\Request;

class MyCardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'column_id' => 'required',
        ]);
        $id = $request['column_id'];
        $table_id = MyColumn::all()->where('id','==', $id)->first()->table_id;
        $table = MyTable::all()->where('id','==',$table_id)->first();
        MyCard::create($request->all());
        return redirect()->route('tables.show', compact('table'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, MyCard $card)
    {
        $request->validate([
            'task' => 'required',
            'table_id' => 'required',
        ]);
        $card->update($request->all());
        $id = $request['table_id'];
        $table = MyTable::all()->where('id','==',$id)->first();
        return redirect()->route('tables.show', compact('table'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MyCard $card)
    {
        $id = $request['table_id'];
        $card->delete();
        $table = MyTable::all()->where('id','==',$id)->first();
        return redirect()->route('tables.show', compact('table'));
    }
}
