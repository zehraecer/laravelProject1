<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
    public function index()
    {
        $about = HomeAbout::first();
        return view('admin.home.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.home.about.create');
    }

    public function store(Request $request)
    {
        HomeAbout::create($request->all());
        return redirect()->route('homeabout.index')->with('success', 'Hakkımızda bölümü eklendi!');
    }

    public function edit($id)
    {
        $about = HomeAbout::findOrFail($id);
        return view('admin.home.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = HomeAbout::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('homeabout.index')->with('success', 'Hakkımızda bölümü güncellendi!');
    }

    public function destroy($id)
    {
        HomeAbout::destroy($id);
        return redirect()->route('homeabout.index')->with('success', 'Kayıt silindi!');
    }
}
