<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use Illuminate\Http\Request;

class AboutBannerController extends Controller
{
    public function index()
    {
        $banners = AboutBanner::all();
        return view('admin.about.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.about.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        AboutBanner::create($request->all());

        return redirect()->route('banner.index')->with('success', 'Banner oluşturuldu');
    }

    public function edit($id)
    {
        $banner = AboutBanner::findOrFail($id);
        return view('admin.about.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = AboutBanner::findOrFail($id);
        $banner->update($request->all());

        return redirect()->route('banner.index')->with('success', 'Banner güncellendi');
    }

    public function destroy($id)
    {
        AboutBanner::findOrFail($id)->delete();
        return redirect()->route('banner.index')->with('success', 'Banner silindi');
    }
}
