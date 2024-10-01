<?php

namespace Application\Controller;
use Application\Model\Article;
use Application\Model\Category;

class Home extends Controller {

    public function index(){

        $category = new Category();
        $categories = $category->all();

        $article = new Article();
        $articles = $article->all();

        return $this->view('app.index', compact('categories', 'articles'));
    }

    public function category($id){

        $categoryObj0 = new Category();
        $categories = $categoryObj0->all();

        $categoryObj = new Category();
        $articles = $categoryObj->articles($id);

        $categoryObj2 = new Category();
        $category = $categoryObj2->find($id);

        return $this->view('app.category', compact('articles', 'category', 'categories'));    }

    public function detail($id){

        $category = new Category();
        $categories = $category->all();

        $articleObj = new Article();
        $article = $articleObj->find($id);

        return $this->view('app.detail', compact('article', 'categories'));
    }
}