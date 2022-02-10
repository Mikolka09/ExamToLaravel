<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
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
        $path = 'storage/folder/';
        $urlAvatar = "";
        $urlImg = "";
        if ($request->file('avatar') != null) {
            $file = $request->file('avatar');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            $urlAvatar = $path . $filename;

            Storage::putFileAs($upload_folder, $file, $filename);
        }
        if ($request->file('imgUrl') != null) {
            $file = $request->file('imgUrl');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            $urlImg = $path . $filename;

            Storage::putFileAs($upload_folder, $file, $filename);
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'city' => 'required',
            'user_id' => 'required'
        ]);
        $user = new DataUser();
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->country = $request['country'];
        $user->city = $request['city'];
        $user->user_id = $request['user_id'];
        $user->imgUrl = $urlImg;
        $user->avatar = $urlAvatar;
        $user->save();

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
    public function update(Request $request, $id)
    {
        $userdata = DataUser::where("user_id", $id)->first();
        $path = 'storage/folder/';
        $urlAvatar = "";
        $urlImg = "";
        if ($request->file('avatar') != null) {
            $file = $request->file('avatar');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            $urlAvatar = $path . $filename;

            Storage::putFileAs($upload_folder, $file, $filename);
        }
        if ($request->file('imgUrl') != null) {
            $file = $request->file('imgUrl');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            $urlImg = $path . $filename;

            Storage::putFileAs($upload_folder, $file, $filename);
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'city' => 'required',
            'user_id' => 'required'
        ]);
        $userdata->firstname = $request['firstname'];
        $userdata->lastname = $request['lastname'];
        $userdata->country = $request['country'];
        $userdata->city = $request['city'];
        $userdata->user_id = $request['user_id'];
        if ($request->file('imgUrl') != null)
            $userdata->imgUrl = $urlImg;
        else
            $userdata->imgUrl = DataUser::all()->where('user_id', '==', $request['user_id'])
                ->first()->imgUrl;
        if ($request->file('avatar') != null)
            $userdata->avatar = $urlAvatar;
        else
            $userdata->avatar = DataUser::all()->where('user_id', '==', $request['user_id'])
                ->first()->avatar;
        $userdata->update([
            'firstname' => $userdata->firstname,
            'lastname' => $userdata->lastname,
            'country' => $userdata->country,
            'city' => $userdata->city,
            'user_id' => $userdata->user_id,
            'imgUrl' => $userdata->imgUrl,
            'avatar' => $userdata->avatar]);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdata = DataUser::where("user_id", $id)->first();
        $userdata->delete();
        return redirect()->route('dashboard');
    }
}
