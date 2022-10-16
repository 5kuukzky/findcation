<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    public function index()
    {
        $data = Wisata::inRandomOrder()->limit(3)->get();
        return view('mitra.addwisata', compact('data'));
    }

    public function provinsi()
    {
        $data = Province::where('name', 'LIKE', '%' . request('q') . '%')->paginate(34);

        return response()->json($data);
    }

    public function regency($id)
    {
        $data = Regency::where('province_id', $id)->where('name', 'LIKE', '%' . request('q') . '%')->paginate(20);

        return response()->json($data);
    }

    public function store(Request $request)
    {
        //yang kiri itu name dari formnya
        $validateData = $request->validate([
            'nama' => 'required|max:255|string',
            'deskripsi' => 'required|max:255|string',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);
        $slug = Str::slug($request->nama, '-');
        $gambar = $request->gambar;
        $gambar_name = Str::random(6) . '-' . $gambar->getClientOriginalName();
        if ($gambar->move(public_path('storage/image_wisata/'), $gambar_name)) {
            Wisata::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->kabupaten,
                'slug' => $slug,
                'gambar' => $gambar_name,
            ]);

            return redirect('dashboard');
        }
    }

    public function show($slug)
    {
        $wisata = Wisata::where('slug', $slug)->first();
        return view('detail', compact('wisata'));
    }
}
