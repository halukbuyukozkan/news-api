<?php

namespace App\Http\Controllers;

use App\ApiService;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get auth user for their preferences
        $user_preferences = Auth::user()->preferences;

        $apiService = new ApiService();

        $BBC_articles = $apiService->getDataBBC();
        $Bloomberg_articles = $apiService->getDataBloomberg();
        $CNN_articles = $apiService->getDataCNN();

        $news = new Collection();
        
        foreach ($user_preferences as $preference) {
            if ($preference->id == 1) {
                $news = $news->merge($BBC_articles);
            }
            if ($preference->id == 2) {
                $news = $news->merge($CNN_articles);
            }
            if ($preference->id == 3) {
                $news = $news->merge($Bloomberg_articles);
            }
        }
        
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
