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
        $news = Post::where('status', 'published')->latest()->take(5)->get();
        $teams = Team::where('key', 'anggota')->get();

        return view('front.index', compact('teams', 'news'));
    }

    public function news()
    {
        $news = Post::where('status', 'published')->latest()->take(5)->get();

        return view('front.berita', compact('news'));
    }

    public function blogDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        if ($post->categories->contains('slug', 'alumni-caring')) {
            return redirect()->route('alumni-caring-detail', $slug);
        }

        $tags = $post->tags->pluck('name')->toArray(); // Get tags as an array of names
        $tagsString = implode(', ', $tags);

        // Set SEO meta tags
        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->excerpt);
        SEOMeta::setKeywords($tags); // Set tags as keywords
        SEOMeta::setCanonical(url()->current());

        $relatedPosts = Post::whereHas('categories', function ($query) use ($post) {
                            $query->whereIn('id', $post->categories->pluck('id')); // Same categories
                        })
                        ->where('posts.id', '!=', $post->id) // Exclude the current post
                        ->orderByRaw('ABS(TIMESTAMPDIFF(SECOND, posts.created_at, ?))', [$post->created_at]) // Order by nearest creation time
                        ->take(3) // Limit the number of related posts
                        ->get();

        return view('front.berita_detail', compact('post', 'relatedPosts'));
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

    public function sopPelayanan()
    {
        return view('front.sop_layanan');
    }

    public function sopPendidikan()
    {
        return view('front.sop_pendidikan');
    }
}
