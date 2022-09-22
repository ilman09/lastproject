<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Input;
use Illuminate\Http\Request;
use App\Http\Requests\User\Input\Store;
use Auth;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputs = User::all();
        return view('user.dashboard',[
            'inputs' => $inputs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        //maping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();

        //update user data
        $user = Auth::user();
        $user->save();

        $input = Input::create($data);


        return redirect(route('input.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $sis = Input::find($id);
        return view('input.edit',["inputs" => $sis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Input $input,$id)
    {
        $sis = Input::find($id);

        if (!$sis) {
            return redirect()->back()->with('error', "Data Not found!");
        }

        $sis->nis = $request->nis;
        $sis->nama_siswa = $request->nama_siswa;
        $sis->jenis_kelamin = $request->jenis_kelamin;
        $sis->tahun = $request->tahun;
        $sis->asal_kota = $request->asal_kota;
        $sis->asal_sekolah = $request->asal_sekolah;

        $sis->save();

        return redirect()->route('dashboard')->with('success', "Data berhasil di update!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $sis = Input::find($id);
        $sis->delete();

        return redirect()->route('dashboard')->with('success', "Data berhasil di hapus!");
    }

    public function success()
    {
        return view ('input.success');
    }
}
