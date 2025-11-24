<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    public function index()
    {
        $banners = HomeBanner::all();
        return view('admin.home.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.home.banner.create');
    }

    public function store(Request $request)
    {
        HomeBanner::create($request->all());
        return redirect()->route('homebanner.index')->with('success', 'Banner eklendi!');
    }

    public function edit($id)
    {
        $banner = HomeBanner::findOrFail($id);
        return view('admin.home.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = HomeBanner::findOrFail($id);
        $banner->update($request->all());

        return redirect()->route('homebanner.index')->with('success', 'Banner güncellendi!');
    }

    public function destroy($id)
    {
        HomeBanner::destroy($id);
        return redirect()->route('homebanner.index')->with('success', 'Banner silindi!');
    }
}
