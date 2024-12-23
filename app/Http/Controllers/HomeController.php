<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SEOMeta;
use Alert;
use App\Models\Aduan;
use App\Models\Team;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = Post::where('status', 'published')->latest()->take(5);
        $teams = Team::where('key', 'anggota')->get();

        return view('front.index', compact('teams', 'news'));
    }

    public function pengaduan()
    {
        return view('front.aduan');
    }

    public function pengaduanStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'captcha' => 'required|captcha', // Laravel Captcha validation
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();
        
        $validatedData['hal'] = 'pengaduan';

        $aduan = Aduan::create($validatedData);

        Alert::success('Terima kasih!', 'Pengaduan Anda telah berhasil dikirim. Kami akan segera menindaklanjuti laporan Anda dan memberikan tanggapan secepat mungkin');
         
        return redirect()->route('pengaduan');
    }
}
