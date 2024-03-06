<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\maids;
use Illuminate\Support\Facades\DB;

class MaidsController extends Controller
{
    public function show(){
        $data_of_user = DB::table('maids')->get();

    return view('maids/maids', ['show_users' => $data_of_user]);


    }
    public function maidsform(){


    return view('maids/maidsform');


    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' =>'required',
            'city'=> 'required',
            'experience'=> 'required',
            'working_type'=> 'required',
            'hourly_rate'=> 'required',
            'status'=> 'required',
            'mobile' => 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
             'alternate_mobile' => 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
             'email'=> 'required|email',
            'idproof'=> 'required',
            'monthly_rate'=> 'required',
            'daily_rate'=> 'required',
        ]);


        $data = new maids;

        session()->flash('success', 'Data added successfully');
        $data->fill($request->all());
        $data->save();

        return redirect()->route('show');
    }

    public function deleteuser(string $id){

        $delete = DB::table('data')
                    ->where('id',$id)
                    ->delete();

                    return redirect()->route('show' );

    }

    public function showupdate($id)
    {

        $data = maids::findOrFail($id);


        return view('update/update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' =>'required',
            'city'=> 'required',
            'experience'=> 'required',
            'working_type'=> 'required',
            'hourly_rate'=> 'required',
            'status'=> 'required',
            'mobile'=> 'required',
            'alternate_mobile'=> 'required',
            'email'=> 'required|email',
            'idproof'=> 'required',
            'monthly_rate'=> 'required',
            'daily_rate'=> 'required',
        ]);

        session()->flash('success', 'Data Updated successfully');
        $data = maids::findOrFail($id);


      $data->update($request->all());


    return redirect()->route('show');

}



}

