<?php

namespace App\Http\Controllers;

use App\Models\Keyresult;
use App\Models\Objective;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeyresultController extends Controller
{
    //

    public function index(Request $request)
    {
        $keyresults = Keyresult::latest()->get();
        return view('keyresult.index', compact('keyresults'));
    }


    public function create()
    {//dd($request->all());
        //$objective = Objective::create([]);
        $objective= Objective::get();

        return view('keyresult.create', compact('objective'));
    }


    public function store(Request $request)
    {//dd($request->all());
        $keyresults = Keyresult::create([
            'objective_id' => $request->objective_id,
            'keyresult_name' => $request->keyresult_name,
            'keyresult_details' => $request->keyresult_details,
            'keyresult_finish' => $request->keyresult_finish,
            'progress' => $request->progress,

        ]);

        if ($keyresults) {
            return redirect()
                ->route('keyresult.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }



    }


    public function edit($id)
    {
        //mengambil data objective berdasarkan id yang dipilih
        $keyresults = Keyresult::findOrFail($id);
        $objective= Objective::get();
        return view('keyresult.edit', compact('keyresults','objective'));
    }


    public function update(Request $request, $id)
    {

    $keyresults = Keyresult::findOrFail($id);

    $keyresults->update([
        'objective_id' => $request->objective_id,
        'keyresult_name' => $request->keyresult_name,
        'keyresult_details' => $request->keyresult_details,
        'keyresult_finish' => $request->keyresult_finish,
        'progress' => $request->progress
    ]);

    if ($keyresults) {
        return redirect()
            ->route('keyresult.index')
            ->with([
                'success' => 'Post has been updated successfully'
            ]);
    } else {
        return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Some problem has occured, please try again'
            ]);
    }

    }


    public function destroy($id)
    {
        $keyresults = Keyresult::findOrFail($id);
        $keyresults->delete();


            return redirect()->back();

    }
}
