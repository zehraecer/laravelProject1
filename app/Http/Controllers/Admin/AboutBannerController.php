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
        // Eğer bu aktifse diğerlerini pasif yap
        if ($request->has('is_active')) {
            AboutBanner::query()->update(['is_active' => false]);
        }

        AboutBanner::create([
            'image'      => $request->image,
            'title'      => $request->title,
            'description'=> $request->description,   // <-- EKSİK OLAN BUYDU!
            'is_active'  => $request->has('is_active') ? 1 : 0,
    ]);


        return redirect()->route('banner.index')->with('success', 'Banner eklendi.');
    }

    public function edit($id)
    {
        $banner = AboutBanner::findOrFail($id);
        return view('admin.about.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = AboutBanner::findOrFail($id);

        if ($request->has('is_active')) {
            AboutBanner::where('id', '!=', $id)->update(['is_active' => false]);
        }

        $banner->update([
            'image'      => $request->image,
            'title'      => $request->title,
            'description'=> $request->description,  // <-- Eksik olan buydu!
            'is_active'  => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner güncellendi.');
    }

    public function destroy($id)
    {
        AboutBanner::destroy($id);
        return redirect()->route('banner.index')->with('success', 'Banner silindi!');
    }
}
