<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Traits\SaveImage;

class TeamController extends Controller
{
    //
    use SaveImage;
    public function index()
    {
        $team = Team::all();
        return view('admin.pages.team.index',compact('team'));
    }
    public function create()
    {
        return view('admin.pages.team.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->has('logo'))
        {
            $data['logo'] = $this->client_logo($request->logo);
        }
        Team::create($data);
        return redirect()->route('team-management.index');

    }
    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.pages.team.edit',compact('team'));

    }
    public function update(Request $request,$id)
    {
        $team = Team::find($id);
        $data = $request->except(['_token','_method']);
        if($request->has('logo'))
        {
            $data['logo'] = $this->client_logo($request->logo);
        }
        $team->update($data);
        return redirect()->route('team-management.index');

    }
    public function destroy()
    {

    }
}
