<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('objective.index');
    }


    public function storeObjective(Request $request){
        //validatiom goes here
        $objective = Objective::create($request->all());
        return $objective;
        $team = Team::create($request->all());
        return $team;
        $user = User::create($request->all());
        return $user;
    }

    public function getAllObjective(){
        $objectives = Objective::all();
        $teams = Team::all();
        $users = User::all();
        return view('objective.index', compact('objectives','teams','users'));
    //if you want to get contacs on where condition use below code
    //$contacts = Contact::Where('tenant_id', "1")->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$objective = Objective::create([]);
        return view('objective.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data ke table objective
        DB::table('objectives')->insert([
            'team_id' => $request->id,
            'objective_name' =>$request->objective,
            'objective_details' =>$request->objectivedetails,
            'objective_finish' =>$request->finish,
            'progress' =>$request->progress
        ]);

        return redirect('/objective');
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
        //mengambil data objective berdasarkan id yang dipilih
        $objectives = DB::table('objectives')->where('id',$id)->first();

        return view('objective.edit',['objectives'=>$objectives]);
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
        //update objective
        DB::table('objectives')->where('id',Auth::user()->id)->update([
            'objective_name'=>$request->objective,
            'objective_details'=>$request->objetivedetails,
            'objective_finish'=>$request->finish,
            'progress'=>$request->progress
        ]);

        return redirect('/objective');
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
