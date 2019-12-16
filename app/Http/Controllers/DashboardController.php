<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $year = Carbon::now()->format('Y');
        $jumlah_pembelajaran = \App\Pembelajaran::all()->count();
        $pembelajaran_c1 = \App\Pembelajaran::whereMonth('created_at', 1)->whereYear('created_at', $year)->count();
        $pembelajaran_c2 = \App\Pembelajaran::whereMonth('created_at', 2)->whereYear('created_at', $year)->count();
        $pembelajaran_c3 = \App\Pembelajaran::whereMonth('created_at', 3)->whereYear('created_at', $year)->count();
        $pembelajaran_c4 = \App\Pembelajaran::whereMonth('created_at', 4)->whereYear('created_at', $year)->count();
        $pembelajaran_c5 = \App\Pembelajaran::whereMonth('created_at', 5)->whereYear('created_at', $year)->count();
        $pembelajaran_c6 = \App\Pembelajaran::whereMonth('created_at', 6)->whereYear('created_at', $year)->count();
        $pembelajaran_c7 = \App\Pembelajaran::whereMonth('created_at', 7)->whereYear('created_at', $year)->count();
        $pembelajaran_c8 = \App\Pembelajaran::whereMonth('created_at', 8)->whereYear('created_at', $year)->count();
        $pembelajaran_c9 = \App\Pembelajaran::whereMonth('created_at', 9)->whereYear('created_at', $year)->count();
        $pembelajaran_c10 = \App\Pembelajaran::whereMonth('created_at', 10)->whereYear('created_at', $year)->count();
        $pembelajaran_c11 = \App\Pembelajaran::whereMonth('created_at', 11)->whereYear('created_at', $year)->count();
        $pembelajaran_c12 = \App\Pembelajaran::whereMonth('created_at', 12)->whereYear('created_at', $year)->count();
        $pembelajaran_u1 = \App\Pembelajaran::whereMonth('updated_at', 1)->whereYear('updated_at', $year)->count();
        $pembelajaran_u2 = \App\Pembelajaran::whereMonth('updated_at', 2)->whereYear('updated_at', $year)->count();
        $pembelajaran_u3 = \App\Pembelajaran::whereMonth('updated_at', 3)->whereYear('updated_at', $year)->count();
        $pembelajaran_u4 = \App\Pembelajaran::whereMonth('updated_at', 4)->whereYear('updated_at', $year)->count();
        $pembelajaran_u5 = \App\Pembelajaran::whereMonth('updated_at', 5)->whereYear('updated_at', $year)->count();
        $pembelajaran_u6 = \App\Pembelajaran::whereMonth('updated_at', 6)->whereYear('updated_at', $year)->count();
        $pembelajaran_u7 = \App\Pembelajaran::whereMonth('updated_at', 7)->whereYear('updated_at', $year)->count();
        $pembelajaran_u8 = \App\Pembelajaran::whereMonth('updated_at', 8)->whereYear('updated_at', $year)->count();
        $pembelajaran_u9 = \App\Pembelajaran::whereMonth('updated_at', 9)->whereYear('updated_at', $year)->count();
        $pembelajaran_u10 = \App\Pembelajaran::whereMonth('updated_at', 10)->whereYear('updated_at', $year)->count();
        $pembelajaran_u11 = \App\Pembelajaran::whereMonth('updated_at', 11)->whereYear('updated_at', $year)->count();
        $pembelajaran_u12 = \App\Pembelajaran::whereMonth('updated_at', 12)->whereYear('updated_at', $year)->count();
        $pengumuman_c1 = \App\Pengumuman::whereMonth('created_at', 1)->whereYear('created_at', $year)->count();
        $pengumuman_c2 = \App\Pengumuman::whereMonth('created_at', 2)->whereYear('created_at', $year)->count();
        $pengumuman_c3 = \App\Pengumuman::whereMonth('created_at', 3)->whereYear('created_at', $year)->count();
        $pengumuman_c4 = \App\Pengumuman::whereMonth('created_at', 4)->whereYear('created_at', $year)->count();
        $pengumuman_c5 = \App\Pengumuman::whereMonth('created_at', 5)->whereYear('created_at', $year)->count();
        $pengumuman_c6 = \App\Pengumuman::whereMonth('created_at', 6)->whereYear('created_at', $year)->count();
        $pengumuman_c7 = \App\Pengumuman::whereMonth('created_at', 7)->whereYear('created_at', $year)->count();
        $pengumuman_c8 = \App\Pengumuman::whereMonth('created_at', 8)->whereYear('created_at', $year)->count();
        $pengumuman_c9 = \App\Pengumuman::whereMonth('created_at', 9)->whereYear('created_at', $year)->count();
        $pengumuman_c10 = \App\Pengumuman::whereMonth('created_at', 10)->whereYear('created_at', $year)->count();
        $pengumuman_c11 = \App\Pengumuman::whereMonth('created_at', 11)->whereYear('created_at', $year)->count();
        $pengumuman_c12 = \App\Pengumuman::whereMonth('created_at', 12)->whereYear('created_at', $year)->count();
        $pengumuman_u1 = \App\Pengumuman::whereMonth('updated_at', 1)->whereYear('updated_at', $year)->count();
        $pengumuman_u2 = \App\Pengumuman::whereMonth('updated_at', 2)->whereYear('updated_at', $year)->count();
        $pengumuman_u3 = \App\Pengumuman::whereMonth('updated_at', 3)->whereYear('updated_at', $year)->count();
        $pengumuman_u4 = \App\Pengumuman::whereMonth('updated_at', 4)->whereYear('updated_at', $year)->count();
        $pengumuman_u5 = \App\Pengumuman::whereMonth('updated_at', 5)->whereYear('updated_at', $year)->count();
        $pengumuman_u6 = \App\Pengumuman::whereMonth('updated_at', 6)->whereYear('updated_at', $year)->count();
        $pengumuman_u7 = \App\Pengumuman::whereMonth('updated_at', 7)->whereYear('updated_at', $year)->count();
        $pengumuman_u8 = \App\Pengumuman::whereMonth('updated_at', 8)->whereYear('updated_at', $year)->count();
        $pengumuman_u9 = \App\Pengumuman::whereMonth('updated_at', 9)->whereYear('updated_at', $year)->count();
        $pengumuman_u10 = \App\Pengumuman::whereMonth('updated_at', 10)->whereYear('updated_at', $year)->count();
        $pengumuman_u11 = \App\Pengumuman::whereMonth('updated_at', 11)->whereYear('updated_at', $year)->count();
        $pengumuman_u12 = \App\Pengumuman::whereMonth('updated_at', 12)->whereYear('updated_at', $year)->count();
        $jumlah_pengumuman = \App\Pengumuman::all()->count();
        $jumlah_kegiatan = \App\Kegiatan::all()->count();
        $jumlah_galeri = \App\Galeri::all()->count();
        $jumlah_saran = \App\Kontak::all()->count();
        $jumlah_studi = \App\Studi::all()->count();
        $jumlah_guru = \App\Guru::all()->count();
        $jumlah_jurusan = \App\Jurusan::all()->count();
        return view('backend.dashboard', [
            'jumlah_pembelajaran' => $jumlah_pembelajaran,
            'pembelajaran_c1' => $pembelajaran_c1,
            'pembelajaran_c2' => $pembelajaran_c2,
            'pembelajaran_c3' => $pembelajaran_c3,
            'pembelajaran_c4' => $pembelajaran_c4,
            'pembelajaran_c5' => $pembelajaran_c5,
            'pembelajaran_c6' => $pembelajaran_c6,
            'pembelajaran_c7' => $pembelajaran_c7,
            'pembelajaran_c8' => $pembelajaran_c8,
            'pembelajaran_c9' => $pembelajaran_c9,
            'pembelajaran_c10' => $pembelajaran_c10,
            'pembelajaran_c11' => $pembelajaran_c11,
            'pembelajaran_c12' => $pembelajaran_c12,
            'pembelajaran_u1' => $pembelajaran_u1,
            'pembelajaran_u2' => $pembelajaran_u2,
            'pembelajaran_u3' => $pembelajaran_u3,
            'pembelajaran_u4' => $pembelajaran_u4,
            'pembelajaran_u5' => $pembelajaran_u5,
            'pembelajaran_u6' => $pembelajaran_u6,
            'pembelajaran_u7' => $pembelajaran_u7,
            'pembelajaran_u8' => $pembelajaran_u8,
            'pembelajaran_u9' => $pembelajaran_u9,
            'pembelajaran_u10' => $pembelajaran_u10,
            'pembelajaran_u11' => $pembelajaran_u11,
            'pembelajaran_u12' => $pembelajaran_u12,
            'pengumuman_c1' => $pengumuman_c1,
            'pengumuman_c2' => $pengumuman_c2,
            'pengumuman_c3' => $pengumuman_c3,
            'pengumuman_c4' => $pengumuman_c4,
            'pengumuman_c5' => $pengumuman_c5,
            'pengumuman_c6' => $pengumuman_c6,
            'pengumuman_c7' => $pengumuman_c7,
            'pengumuman_c8' => $pengumuman_c8,
            'pengumuman_c9' => $pengumuman_c9,
            'pengumuman_c10' => $pengumuman_c10,
            'pengumuman_c11' => $pengumuman_c11,
            'pengumuman_c12' => $pengumuman_c12,
            'pengumuman_u1' => $pengumuman_u1,
            'pengumuman_u2' => $pengumuman_u2,
            'pengumuman_u3' => $pengumuman_u3,
            'pengumuman_u4' => $pengumuman_u4,
            'pengumuman_u5' => $pengumuman_u5,
            'pengumuman_u6' => $pengumuman_u6,
            'pengumuman_u7' => $pengumuman_u7,
            'pengumuman_u8' => $pengumuman_u8,
            'pengumuman_u9' => $pengumuman_u9,
            'pengumuman_u10' => $pengumuman_u10,
            'pengumuman_u11' => $pengumuman_u11,
            'pengumuman_u12' => $pengumuman_u12,
            'jumlah_pengumuman' => $jumlah_pengumuman,
            'jumlah_jurusan' => $jumlah_jurusan,
            'jumlah_guru' => $jumlah_guru,
            'jumlah_studi' => $jumlah_studi,
            'jumlah_saran' => $jumlah_saran,
            'jumlah_galeri' => $jumlah_galeri,
            'jumlah_kegiatan' => $jumlah_kegiatan,
        ]);
    }
}
