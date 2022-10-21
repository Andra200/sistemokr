<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class TeamController extends Controller
{
    public $table = "team";
    //public $Dosen = "team";

    
    public function index(Request $request)
    {
    	// mengambil data dari table pegawai
    	$team = DB::table('team')->where('team_dosen','=','Pak Kholid')->get();
       // ini amnbi setelah team pindah keatas udah bisa DB::table('team')->where('team_dosen','=','Pak Kholid')->get();
        
 return $team;
    	// mengirim data pegawai ke view index
    	//return view('index',['team' => $team]);
        
        //filter by dosen
      


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