<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutBox;
use Illuminate\Http\Request;

class AboutBoxController extends Controller
{
    public function index()
    {
        $boxes = AboutBox::all();
        return view('admin.about.boxes.index', compact('boxes'));
    }

    public function create()
    {
        return view('admin.about.boxes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        AboutBox::create($request->all());

        return redirect()->route('boxes.index')->with('success', 'Kutu oluşturuldu');
    }

    public function edit($id)
    {
        $box = AboutBox::findOrFail($id);
        return view('admin.about.boxes.edit', compact('box'));
    }

    public function update(Request $request, $id)
    {
        $box = AboutBox::findOrFail($id);
        $box->update($request->all());

        return redirect()->route('boxes.index')->with('success', 'Kutu güncellendi');
    }

    public function destroy($id)
    {
        AboutBox::findOrFail($id)->delete();
        return redirect()->route('boxes.index')->with('success', 'Kutu silindi');
    }
}
