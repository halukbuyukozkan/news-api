<?php

namespace App\Http\Controllers;

use App\ApiService;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get auth user for their preferences
        $user_preference = Auth::user();

        $apiService = new ApiService();

        
        $BBC_articles = $apiService->getDataBBC();
        $Bloomberg_articles = $apiService->getDataBloomberg();
        $CNN_articles = $apiService->getDataCNN();

        $news = $BBC_articles->merge($Bloomberg_articles)->merge($CNN_articles);

        return $news;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
