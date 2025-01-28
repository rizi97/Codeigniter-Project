<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController {

    public function index() : string {

        $articleModel = new ArticleModel();

        $data = $articleModel->findAll();

        return view('Articles/index', [
            'articles' => $data
        ]);
    }
}