<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    
    public function index()
    {
        $url = Url::where('created_by',auth()->id())->get();
        return view('url.index',compact('url'));
    }

    public function create() {
        return view('url.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $originalUrl = $request->input('url');
        $shortUrl = $this->generateShortUrl();

        URL::create([
            'original_url' => $originalUrl,
            'short_url' => $shortUrl,
            'created_by'=>auth()->id()
        ]);

        return redirect()->route('all-url')->with('shortUrl', $shortUrl);
    }

    public function redirectToOriginal($shortUrl)
    {
        $url = Url::where('short_url', $shortUrl)->firstOrFail();

        $url->increment('click_count'); 
        $url->save();

        return redirect($url->original_url);
    }

    private function generateShortUrl()
    {
        return base_convert(rand(1000, 9999), 10, 36);
    }
}
