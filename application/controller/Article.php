<?php
namespace Application\Controller;

use Application\Model\Article as ArticleModel;
use Application\Model\Category as CategoryModel;

class Article extends Controller {

    public function index(){

        $article = new ArticleModel();
        $articles = $article->all();
        return $this->view('panel.article.index', compact('articles'));
    }

    public function create(){

        $category = new CategoryModel();
        $categories = $category->all();
        return $this->view('panel.article.create', compact('categories'));
    }

    public function store(){

        $article = new ArticleModel();
        $article->insert($_POST);
        return $this->redirect('article');
    }

    public function show($id){

    }

    public function edit($id){

        $category = new CategoryModel();
        $categories = $category->all();

        $articleObj = new ArticleModel();
        $article = $articleObj->find($id);

        return $this->view('panel.article.edit', compact('categories', 'article'));
    }

    public function update($id){

        $article = new ArticleModel();
        $article->update($id, $_POST);
        return $this->redirect('article');
    }

    public function delete($id){

        $article = new ArticleModel();
        $article->delete($id);
        return $this->back();
    }
}