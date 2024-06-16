<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($movieId)
    {
        $movie = Movie::findorfail($movieId);
        return view('admin.reviews.create', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $form_data = $request->validate([
            'author' => 'required|max:100',
            'comment' => 'required|max:1000',
            'rating' => 'nullable|numeric|min:1|max:10',
            'movie_id' => 'required'
        ]);
        
        $new_review = new Review();
        $new_review->fill($form_data);
        $new_review->save();
        $movie = Movie::findorfail($form_data['movie_id']);
        $reviews=$movie->reviews;
        return view('admin.movies.show' , compact('movie', 'reviews'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review, Movie $movie)
    {
        $review = Review::with('movie')->findOrFail($review->id);
        $movie = $review->movie;
    
        return view('admin.reviews.edit', compact('review', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $movie = $review->movie;
        $form_data = $request->validate([
            'author' => 'required|max:100',
            'comment' => 'required|max:1000',
            'rating' => 'nullable|numeric|min:1|max:10',
        ]);

        $review->update($form_data);
        $reviews=$movie->reviews;
        
        return view('admin.movies.show' , compact('movie', 'reviews'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $movie_id = $review->movie_id;
        $movie = Movie::findorfail($movie_id);
        $movie_slug = $movie->slug;
        //$reviews=$movie->reviews;
        $review->delete();
        
        return redirect()->route('admin.movies.show', $movie->slug);
    }
}
