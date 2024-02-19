<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //MENAMPILKAN DATA KE HALAMAN PROCESS
    public function userTable(Request $request){
        $laporan = laporan::all();
        
        if ($request->has('search')) {
            $laporan = Laporan::where('id', 'like', '%' . $request->search . '%')->get();            
        }
        return view('main.process',compact('laporan'));
    }

    // MENAMPILKAN DATA KE HALAMAN ADMIN
    public function adminTable(){
        return view('main.admin', [
            'laporan' => Laporan::all()
        ]);
    }

    //MENAMPILKAN DATA ADMIN UNTUK DIEDIT
    public function show($id)
    {
        $user = Auth::user(); 
        $laporan = Laporan::findOrFail($id);
        return view('main.show', compact('laporan'));
    }

    //MENGEDIT DATA ()
    public function updateStatus(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->status = $request->input('status');
        $laporan->feedback = $request->input('feedback');
        $laporan->save();

        return redirect()->route('main.show', $laporan->id)->with('success', 'Status berhasil diperbarui.');
    }

    // MENGHAPUS DATA
    public function destroy($id)
    {
        $laporan = laporan::find($id);

        if (!$laporan) {
            return response()->json(['message' => 'laporan not found'], 404);
        }
        $laporan->delete();

        return Redirect('/admin')->with('success', 'Laporan Berhasil Dihapus!');
    }

    
}
