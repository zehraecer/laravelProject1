<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutTeam;
use Illuminate\Http\Request;

class AboutTeamController extends Controller
{
    public function index()
    {
        $team = AboutTeam::all();
        return view('admin.about.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.about.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'role'  => 'required',
            'image' => 'required'
        ]);

        AboutTeam::create($request->all());

        return redirect()->route('team.index')->with('success', 'Ekip üyesi oluşturuldu');
    }

    public function edit($id)
    {
        $member = AboutTeam::findOrFail($id);
        return view('admin.about.team.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = AboutTeam::findOrFail($id);
        $member->update($request->all());

        return redirect()->route('team.index')->with('success', 'Ekip üyesi güncellendi');
    }

    public function destroy($id)
    {
        AboutTeam::findOrFail($id)->delete();
        return redirect()->route('team.index')->with('success', 'Ekip üyesi silindi');
    }
}
    