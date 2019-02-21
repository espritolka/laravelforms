<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'patronymic' => 'required',
        //     'snils' => 'required',
        //     'login' => 'required',
        //     'password' => 'required|min:8',
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'snils' => 'required',
            'login' => 'required',
            'password' => 'required|min:8',
        ]);
        // dump($request->all());

        
        if ($validator->fails())
        {
           return redirect()->route('admin')->withErrors($validator)->withInput();
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        }
        // return response()->json(['success'=>'Record is successfully added']);

        $res = Users::create(['name' => $request->name, 'surname' => $request->surname, 'patronymic' => $request->patronymic, 'snils' => $request->snils, 'login' => $request->login, 'password' => $request->password]);
        // return $res;
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
