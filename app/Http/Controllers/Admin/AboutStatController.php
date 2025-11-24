<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutStat;
use Illuminate\Http\Request;

class AboutStatController extends Controller
{
    public function index()
    {
        $stats = AboutStat::all();
        return view('admin.about.stats.index', compact('stats'));
    }

    public function create()
    {
        return view('admin.about.stats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required',
            'text' => 'required'
        ]);

        AboutStat::create($request->all());

        return redirect()->route('stats.index')->with('success', 'İstatistik oluşturuldu');
    }

    public function edit($id)
    {
        $stat = AboutStat::findOrFail($id);
        return view('admin.about.stats.edit', compact('stat'));
    }

    public function update(Request $request, $id)
    {
        $stat = AboutStat::findOrFail($id);
        $stat->update($request->all());

        return redirect()->route('stats.index')->with('success', 'İstatistik güncellendi');
    }

    public function destroy($id)
    {
        AboutStat::findOrFail($id)->delete();
        return redirect()->route('stats.index')->with('success', 'İstatistik silindi');
    }
}
