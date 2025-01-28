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


    public function show( $id ) {
        $articleModel = new ArticleModel();

        $data = $articleModel->find($id);

        return view('Articles/single', [
            'article'   => $data
        ]);
    }


    public function add() {
        return view('Articles/add');
    }


    public function create() {

        $articleModel = new ArticleModel();

        $id = $articleModel->insert( $this->request->getPost() );
        
        if( $id === false ) {
            return redirect()->back()
                            ->with('errors', $articleModel->errors() )
                            ->withInput();
        }

        return redirect()->to('article/'. $id )
                            ->with('message', 'Article added.');
    }

}