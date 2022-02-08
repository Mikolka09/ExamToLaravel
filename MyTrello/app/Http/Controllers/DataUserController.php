<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataUserController extends Controller
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

        $path = 'storage//folder//';
        $file = $request->file('avatar');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();
        $urlAvatar = $path.$filename;
        $request['avatar'] = $urlAvatar;
        Storage::putFileAs($upload_folder, $file, $filename);

        $file = $request->file('imgUrl');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();
        $urlImg = $path.$filename;
        $request['imgUrl'] = $urlImg;
        Storage::putFileAs($upload_folder, $file, $filename);

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'city' => 'required',
            'avatar' => 'required',
            'imgUrl' => 'required'
        ]);

        DataUser::create($request->all());

        return redirect()->route('dashboard');
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
    public function update(Request $request, User $user)
    {
        $path = 'storage/folder/';
        $file = $request->file('avatar');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();

        Storage::putFileAs($upload_folder, $file, $filename);


        $file = $request->file('imgUrl');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();

        Storage::putFileAs($upload_folder, $file, $filename);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUser $dataUser)
    {
        $dataUser->delete();
    }
}
