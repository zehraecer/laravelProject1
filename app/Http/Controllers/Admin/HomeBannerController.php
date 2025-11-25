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
        // Eğer bu banner aktif seçildiyse, diğer tüm banner’ları pasif yap
        if ($request->has('is_active')) {
            HomeBanner::query()->update(['is_active' => false]);
        }

        HomeBanner::create([
            'image' => $request->image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('homebanner.index')->with('success', 'Banner eklendi.');
    }


    public function edit($id)
    {
        $banner = HomeBanner::findOrFail($id);
        return view('admin.home.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = HomeBanner::findOrFail($id);

        // Eğer aktif işaretlendiyse diğerlerini pasif yap
        if ($request->has('is_active')) {
            HomeBanner::where('id', '!=', $id)->update(['is_active' => false]);
        }

        $banner->update([
            'image' => $request->image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('homebanner.index')->with('success', 'Banner güncellendi.');
    }

    public function destroy($id)
    {
        HomeBanner::destroy($id);
        return redirect()->route('homebanner.index')->with('success', 'Banner silindi!');
    }
}
