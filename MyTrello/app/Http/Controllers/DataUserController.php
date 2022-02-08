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
        $path = 'storage/folder/';
        $file = $request->file('avatar');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();
        $urlAvatar = $path . $filename;

        Storage::putFileAs($upload_folder, $file, $filename);

        $file = $request->file('imgUrl');
        $upload_folder = 'public/folder';
        $filename = $file->getClientOriginalName();
        $urlImg = $path . $filename;

        Storage::putFileAs($upload_folder, $file, $filename);

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
        //dd($request->file('imgUrl')!=null);
        $userdata = DataUser::all()->where('user_id','==',$id);
        $path = 'storage/folder/';
        $urlAvatar = "";
        $urlImg = "";
        if ($request->file('avatar')!=null) {
            $file = $request->file('avatar');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            $urlAvatar = $path . $filename;

            Storage::putFileAs($upload_folder, $file, $filename);
        }
        if ($request->file('imgUrl')!=null) {
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
        if ($request->file('imgUrl')!=null)
            $userdata->imgUrl = $urlImg;
        else
            $userdata->imgUrl = $userdata[0]->imgUrl;
        if ($request->file('avatar')!=null)
            $userdata->avatar = $urlAvatar;
        else
            $userdata->avatar = $userdata[0]->avatar;
        //dd($userdata);
        $userdata->update();
        return redirect()->route('dashboard');
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
