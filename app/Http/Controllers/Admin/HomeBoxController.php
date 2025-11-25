<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBox;
use Illuminate\Http\Request;

class HomeBoxController extends Controller
{
    public function index()
    {
        $boxes = HomeBox::all();
        return view('admin.home.boxes.index', compact('boxes'));
    }

    public function create()
    {
        return view('admin.home.boxes.create');
    }

    public function store(Request $request)
    {
        HomeBox::create([
            'title'     => $request->title,
            'text'      => $request->text,
            'icon'      => $request->icon,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('homeboxes.index')->with('success', 'Kutu eklendi!');
    }

    public function edit($id)
    {
        $box = HomeBox::findOrFail($id);
        return view('admin.home.boxes.edit', compact('box'));
    }

    public function update(Request $request, $id)
    {
        $box = HomeBox::findOrFail($id);

        $box->update([
            'title'     => $request->title,
            'text'      => $request->text,
            'icon'      => $request->icon,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('homeboxes.index')->with('success', 'Kutu güncellendi!');
    }

    public function destroy($id)
    {
        HomeBox::destroy($id);
        return redirect()->route('homeboxes.index')->with('success', 'Kutu silindi!');
    }
}
