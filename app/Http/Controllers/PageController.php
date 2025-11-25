<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;        // Page modelini kullanacağız
use Illuminate\Support\Str; // Slug oluşturmak için

class PageController extends Controller
{
    // ----- FRONTEND -----2
    public function home()
        {
            $banner = \App\Models\HomeBanner::where('is_active', 1)->first();
            $boxes  = \App\Models\HomeBox::where('is_active', 1)->get();
            $about  = \App\Models\HomeAbout::first();

            return view('home', compact('banner', 'boxes', 'about'));
        }

    public function about()
    {
        $banner = \App\Models\AboutBanner::where('is_active', true)->first();
        $boxes    = \App\Models\AboutBox::all();
        $stats    = \App\Models\AboutStat::all();
        $team     = \App\Models\AboutTeam::all();
        $services = \App\Models\AboutService::all();

        return view('about', compact('banner', 'boxes', 'stats', 'team', 'services'));
    }

    public function contact()
    {
        return view('contact');
    }


    // ----- ADMIN PAGES CRUD -----

    // 1) Listeleme
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->get();
        return view('admin.pages.index', compact('pages'));
    }

    // 2) Yeni sayfa formu
    public function create()
    {
        return view('admin.pages.create');
    }

    // 3) Yeni sayfa kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required',
            'content' => 'required'
        ]);

        Page::create([
            'title'      => $request->title,
            'slug'       => Str::slug($request->title), // slug otomatik
            'content'    => $request->content,
            'is_active'  => $request->has('is_active'),
            'created_by' => auth()->id(),
        ]);

        return redirect('/admin/pages')->with('success', 'Sayfa başarıyla oluşturuldu');
    }

    // 4) Düzenleme formu
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    // 5) Güncelleme
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'   => 'required',
            'content' => 'required'
        ]);

        $page = Page::findOrFail($id);

        $page->update([
            'title'      => $request->title,
            'slug'       => Str::slug($request->title), // slug yine otomatik yenileniyor
            'content'    => $request->content,
            'is_active'  => $request->has('is_active'),
            'updated_by' => auth()->id(),
        ]);

        return redirect('/admin/pages')->with('success', 'Sayfa güncellendi');
    }

    // 6) Silme
    public function destroy($id)
    {
        Page::findOrFail($id)->delete();
        return redirect('/admin/pages')->with('success', 'Sayfa silindi');
    }
}
