<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectives = Objective::latest()->get();
        return view('objective.index', compact('objectives'));
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
    {//dd($request->all());
        //$objective = Objective::create([]);
        $teams= Team::get();

        return view('objective.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request->all());
       /**  $this->validate($request, [
            'id' => 'required|string|max:155'
        ]);
*/      //$teams = Team::table('name')->get();

        $objectives = Objective::create([
            'team_id' => $request->team_id,
            'objective_name' => $request->objective_name,
            'objective_details' => $request->objective_details,
            'objective_finish' => $request->objective_finish,
            'progress' => $request->progress,

           // 'slug' => Str::slug($request->id)
        ]);

        if ($objectives) {
            return redirect()
                ->route('objective.index')
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
        //insert data ke table objective
       /**  DB::table('objectives')->insert([
          *  'team_id' => $request->id,
           * 'objective_name' =>$request->objective,
            *'objective_details' =>$request->objectivedetails,
            *'objective_finish' =>$request->finish,
            *'progress' =>$request->progress
        *]);
*
 *       return redirect('/objective');
 */
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
        $objectives = Objective::findOrFail($id);
        $teams= Team::get();
        return view('objective.edit', compact('objectives','teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$this->validate($request, [
        'team_id' => $request->team_id,
        'objective_name' => $request->objective_name,
        'objective_details' => $request->objective_details,
        'objective_finish' => $request->objective_finish,
        'progress' => $request->progress
    ]);

    $objectives = Objective::findOrFail($id);

    $objectives->update([
        'team_id' => $request->team_id,
        'objective_name' => $request->objective_name,
        'objective_details' => $request->objective_details,
        'objective_finish' => $request->objective_finish,
        'progress' => $request->progress
    ]);

    if ($objectives) {
        return redirect()
            ->route('objective.index')
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
        //update objective
        //DB::table('objectives')->where('id',Auth::user()->id)->update([
           /**  ($request->all());
            $objectives->update([
            'objective_name'=>$request->objective_name,
            'objective_details'=>$request->objective_details,
            'objective_finish'=>$request->objective_finish,
            'progress'=>$request->progress
        ]);

        return redirect('objective.index');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objectives = Objective::findOrFail($id);
        $objectives->delete();

        if ($objectives) {
            return redirect()
                ->route('objective.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('objective.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
