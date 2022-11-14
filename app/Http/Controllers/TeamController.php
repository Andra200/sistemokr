<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;


class TeamController extends Controller
{
   // public $table = "team";
    //public $Dosen = "team";


    public function index(Request $request)
    {
        $teams = Team::latest()->get();
        return view('team.index', compact('teams'));
    	// mengambil data dari table pegawai
    	//$team = DB::table('team')->where('team_dosen','=','Pak Kholid')->get();
       // ini amnbi setelah team pindah keatas udah bisa DB::table('team')->where('team_dosen','=','Pak Kholid')->get();

// return $team;
    	// mengirim data pegawai ke view index
    	//return view('index',['team' => $team]);

        //filter by dosen



    }

    public function create()
    {//dd($request->all());
        //$objective = Objective::create([]);
        $users= User::get();

        return view('team.create', compact('users'));
    }


    public function store(Request $request)
    {//dd($request->all());
        $teams = Team::create([
            'user_id' => $request->user_id,
            'name' => $request->name


        ]);

        if ($teams) {
            return redirect()
                ->route('team.index')
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

    public function addteam()
    {
        return view('addteam');
    }

    public function details()
    {
        return view('details');
    }

    public function add()
    {
        return view('add');
    }

    public function addinit()
    {
        return view('addinit');
    }

    public function updatekeyresult()
    {
        return view('updatekeyresult');
    }

    public function updateinit()
    {
        return view('updateinit');
    }

   // private function Dosen()
    //{
      //  return[
        //    'pak kholid' => trans('posts.form_control.select.dosen.option.pak kholid'),
          //  'pak hanson' => trans('posts.form_control.select.dosen.option.pak hanson'),
            //'pak dhomas' => trans('posts.form_control.select.dosen.option.pak dhomas'),

       // ];
   // }
}
