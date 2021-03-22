<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => "required",
            'role' => "required",
            'image' => "required",
            'facebook' => "required",
            'twitter' => "required",
            'instagrame' => "required"
        ]);

        $team = Team::create($data);
        $this->storeImage($team);
        return redirect()->route('team.index');
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
        $team = Team::find(intval($id));
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //dd($avant);
        $data = $request->validate([
            'nom' => "required",
            'role' => "required",
            'image' => "required",
            'facebook' => "required",
            'twitter' => "required",
            'instagrame' => "required"
        ]);
        
        if($team->image){
            $avant = $team->image ;
            unlink('storage/'.$avant);
        }

        $team->update($data);
        $this->storeImage($team);
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if($team->delete()){
            $avant = $team->image ;
            unlink('storage/'.$avant);
        }
        return redirect()->route('team.index');
    }

    private function storeImage(Team $team)
    {
       if ($team->image) {
           $team->update([
               'image' => $team->image->store('team','public')
           ]);
       }
    }
}
