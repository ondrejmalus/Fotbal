<?php namespace App\Controllers\Admin;

use App\Models\ArticleModel;

class AdminArticles extends BaseController
{
    public function index()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->orderBy('date', 'DESC')->findAll();
        return view('admin/articles/index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('admin/articles/create');
    }

    public function store()
    {
        $articleModel = new ArticleModel();

        $data = [
            'link' => $this->request->getPost('link'),
            'photo' => $this->request->getPost('photo'),
            'date' => $this->request->getPost('date'),
            'top' => $this->request->getPost('top') ? 1 : 0,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'text' => $this->request->getPost('text')
        ];

        $articleModel->insert($data);
        return redirect()->to('/admin/articles');
    }

    public function edit($id)
    {
        $articleModel = new ArticleModel();
        $article = $articleModel->find($id);
        return view('admin/articles/edit', ['article' => $article]);
    }

    public function update($id)
    {
        $articleModel = new ArticleModel();

        $data = [
            'link' => $this->request->getPost('link'),
            'photo' => $this->request->getPost('photo'),
            'date' => $this->request->getPost('date'),
            'top' => $this->request->getPost('top') ? 1 : 0,
            'published' => $this->request->getPost('published') ? 1 : 0,
            'text' => $this->request->getPost('text')
        ];

        $articleModel->update($id, $data);
        return redirect()->to('/admin/articles');
    }

    public function delete($id)
    {
        $articleModel = new ArticleModel();
        $articleModel->delete($id);
        return redirect()->to('/admin/articles');
    }
}
