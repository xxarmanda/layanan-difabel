<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function beranda()
    {
        return view('beranda2');
    }

    public function beranda2()
    {
        return view('beranda2');
    }

    public function pilihan1()
    {
        $posts = DB::table('pilihan1_posts')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pilihan1', compact('posts'));
    }

    public function pilihan2()
    {
        $posts = DB::table('pilihan2_posts')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pilihan2', compact('posts'));
    }

    public function admin1()
    {
        $posts = DB::table('pilihan1_posts')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin1', compact('posts'));
    }

    public function admin2()
    {
        $posts = DB::table('pilihan2_posts')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin2', compact('posts'));
    }

    // === FUNGSI CRUD UNTUK pilihan1_posts (admin1) ===
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'default.png';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }

        DB::table('pilihan1_posts')->insert([
            'title' => $request->title,
            'text' => $request->text,
            'url' => $request->url,
            'image' => $imageName,
            'created_at' => now(),
        ]);

        return redirect()->route('admin1')->with('success', 'Postingan berhasil dibuat.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = DB::table('pilihan1_posts')->where('id', $id)->first();

        if (!$post) {
            return redirect()->route('admin1')->with('error', 'Postingan tidak ditemukan.');
        }

        $imageName = $post->image;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }

        DB::table('pilihan1_posts')->where('id', $id)->update([
            'title' => $request->title,
            'text' => $request->text,
            'url' => $request->url,
            'image' => $imageName,
        ]);

        return redirect()->route('admin1')->with('success', 'Postingan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $post = DB::table('pilihan1_posts')->where('id', $id)->first();

        if (!$post) {
            return redirect()->route('admin1')->with('error', 'Postingan tidak ditemukan.');
        }

        DB::table('pilihan1_posts')->where('id', $id)->delete();
        return redirect()->route('admin1')->with('success', 'Postingan berhasil dihapus.');
    }

    // === FUNGSI CRUD UNTUK pilihan2_posts (admin2) ===
    public function store2(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'default.png';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }

        DB::table('pilihan2_posts')->insert([
            'title' => $request->title,
            'text' => $request->text,
            'url' => $request->url,
            'image' => $imageName,
            'created_at' => now(),
        ]);

        return redirect()->route('admin2')->with('success', 'Postingan berhasil dibuat.');
    }

    public function update2(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = DB::table('pilihan2_posts')->where('id', $id)->first();

        if (!$post) {
            return redirect()->route('admin2')->with('error', 'Postingan tidak ditemukan.');
        }

        $imageName = $post->image;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }

        DB::table('pilihan2_posts')->where('id', $id)->update([
            'title' => $request->title,
            'text' => $request->text,
            'url' => $request->url,
            'image' => $imageName,
        ]);

        return redirect()->route('admin2')->with('success', 'Postingan berhasil diupdate.');
    }

    public function destroy2($id)
    {
        $post = DB::table('pilihan2_posts')->where('id', $id)->first();

        if (!$post) {
            return redirect()->route('admin2')->with('error', 'Postingan tidak ditemukan.');
        }

        DB::table('pilihan2_posts')->where('id', $id)->delete();
        return redirect()->route('admin2')->with('success', 'Postingan berhasil dihapus.');
    }
}
