<?php

namespace App\Http\Controllers;

use App\Models\Vape;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Exception;

class VapeController extends Controller
{
    public function index()
    {
        $vape = Vape::orderBy('nama', 'asc')->get();
        return view('vape.vape', compact('vape'));
    }

    public function create()
    {
        return view('vape.vape-add');
    }

    public function show($id_vape)
    {
        $data = Vape::findOrFail($id_vape);
        return view('vape.vape-view', compact('data'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100|unique:vapes,nama',
            'harga' => 'required|numeric',
            'bobot_harga' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'baterai' => 'required|numeric|min:0|max:2000',
            'bobot_baterai' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'pengisian_daya' => 'required|in:Cepat,Normal',
            'bobot_pengisian_daya' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'kemudahan_penggunaan' => 'required|in:Mudah,Sedang,Expert',
            'bobot_kemudahan_penggunaan' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads/foto-vape', 'public');
        }

        Vape::create($validated);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/vape');
    }

    public function edit($id_vape)
    {
        $vape = Vape::findOrFail($id_vape);
        return view('vape.vape-edit', [
            'vape' => $vape,
        ]);
    }

    public function update(Request $request, $id_vape)
    {

        $vape = Vape::findOrFail($id_vape);
        $validated = $request->validate([
            'nama' => 'required|max:100|unique:vapes,nama,' . $id_vape . ',id_vape',
           'harga' => 'required|numeric',
            'bobot_harga' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'baterai' => 'required|numeric|min:0|max:2000',
            'bobot_baterai' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'pengisian_daya' => 'required|in:Cepat,Normal',
            'bobot_pengisian_daya' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'kemudahan_penggunaan' => 'required|in:Mudah,Sedang,Expert',
            'bobot_kemudahan_penggunaan' => 'required|regex:/^\d+(\.\d{1,2})?$/|min:0|max:4',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($vape->foto) {
                Storage::disk('public')->delete($vape->foto);
            }
            $validated['foto'] = $request->file('foto')->store('uploads/foto-vape', 'public');
        } else {
            // Kalau tidak upload foto, tetap pakai yang lama
            $validated['foto'] = $vape->foto;
        }
        
        $vape->update($validated);


        Alert::success('Success', 'Data berhasil diupdate');
        return redirect('/vape');
    }

    public function destroy($id_vape)
    {
        try {
            $vape = Vape::findOrFail($id_vape);

            if ($vape->foto) {
                Storage::disk('public')->delete($vape->foto);
            }

            $vape->delete();

            Alert::error('Deleted', 'Data berhasil dihapus');
            return redirect('/vape');
        } catch (Exception $ex) {
            Alert::warning('Gagal', 'Data gagal dihapus karena sedang digunakan');
            return redirect('/vape');
        }
    }
}
