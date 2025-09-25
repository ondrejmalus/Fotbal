<?php

namespace App\Controllers;
use App\Models\ArticleModel;

class Home extends BaseController
{
    public function index()
    {
        helper('text'); // 👈 zpřístupní character_limiter()

        $articleModel = new ArticleModel();

        $this->data['articles'] = $articleModel
            ->where('published', 1)
            ->where('top', 1)
            ->orderBy('date', 'DESC')
            ->findAll(9);

        // Tady pošleme i navbar, protože už ho máme v BaseControlleru
        return view('home/index', $this->data);
    }
}
