<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutService;
use Illuminate\Http\Request;

class AboutServiceController extends Controller
{
    public function index()
    {
        $services = AboutService::all();
        return view('admin.about.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.about.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text'  => 'required',
            'image' => 'required'
        ]);

        AboutService::create($request->all());

        return redirect()->route('services.index')->with('success', 'Hizmet oluşturuldu');
    }

    public function edit($id)
    {
        $service = AboutService::findOrFail($id);
        return view('admin.about.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = AboutService::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Hizmet güncellendi');
    }

    public function destroy($id)
    {
        AboutService::findOrFail($id)->delete();
        return redirect()->route('services.index')->with('success', 'Hizmet silindi');
    }
}
