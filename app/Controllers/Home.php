<?php
namespace App\Controllers;
use App\Models\ArticleModel;

class Home extends BaseController
{
    public function index()
    {
        helper('text');

        $articleModel = new ArticleModel();

        $articles = $articleModel
            ->where('published', 1)
            ->where('top', 1)
            ->orderBy('date', 'DESC')
            ->findAll();

        // převod timestampu a komplet URL obrázku
        foreach ($articles as &$article) {
            $article['date_formatted'] = date('d.m.Y', $article['date']); // např. 10.10.2025
            // doplníme cestu k obrázku – zkontroluj složku, kde jsou články
            $article['photo_url'] = base_url('public/images/sigma/' . $article['photo']);
        }

        $this->data['articles'] = $articles;

        return view('home/index', $this->data);
    }
}