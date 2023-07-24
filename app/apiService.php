<?php

namespace App;

use App\Models\News;
use GuzzleHttp\Client;

class ApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            // You can set any Guzzle options here, like base_uri, headers, etc.
            // 'base_uri' => 'https://api.example.com',
        ]);
    }

    public function getDataBBC()
    {
        try {
            $response = $this->client->get('https://newsapi.org/v2/top-headlines?sources=bbc-sport&apiKey=9d39fd346ea24a70a0a3990d6f867f6a');
            $BBC_articles = json_decode($response->getBody(), true);
            $news = $this->createNews($BBC_articles);
            
            return $news;
        } catch (\Exception $e) {
            // Handle any errors or exceptions here
            return [];
        }
    }

    public function getDataBloomberg()
    {
        try {
            $response = $this->client->get('https://newsapi.org/v2/top-headlines?sources=bloomberg&apiKey=9d39fd346ea24a70a0a3990d6f867f6a');
            $Bloomberg_articles = json_decode($response->getBody(), true);
            $news = $this->createNews($Bloomberg_articles);
            
            return $news;
        } catch (\Exception $e) {
            // Handle any errors or exceptions here
            return [];
        }
    }

    public function getDataCNN()
    {
        try {
            $response = $this->client->get('https://newsapi.org/v2/top-headlines?sources=cnn&apiKey=9d39fd346ea24a70a0a3990d6f867f6a');
            $CNN_articles = json_decode($response->getBody(), true);
            $news = $this->createNews($CNN_articles);
            
            return $news;
        } catch (\Exception $e) {
            // Handle any errors or exceptions here
            return [];
        }
    }



    public function createNews($articles)
    {
        $news = collect($articles['articles'])->map(function ($article){
            $news = new News();
            $news->source = $article['source']['name'];
            $news->author = $article['author'];
            $news->title = $article['title'];
            $news->content = $article['content'];
            $news->publishedAt = $article['publishedAt'];
            if($article['source']['id'] == 'cnn'){
                $news->category = 'general';
            }else if($article['source']['id'] == 'bloomberg'){
                $news->category = 'business';
            }else if($article['source']['id'] == 'bbc-sport'){
                $news->category = 'sports';
            }

            return $news;
        });

        return $news;
    }


}
