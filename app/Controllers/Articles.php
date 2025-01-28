<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Entities\ArticleEntity;
use CodeIgniter\Exceptions\PageNotFoundException;

class Articles extends BaseController {

    private ArticleModel $model;
    private ArticleEntity $entity;

    public function __construct() {
        $this->model = new ArticleModel;
        $this->entity = new ArticleEntity;
    }


    public function index() : string {

        $data = $this->model->findAll();

        return view('Articles/index', [
            'articles' => $data
        ]);
    }


    public function show( $id ) {
        
        $data = $this->getArticleOr404($id);

        return view('Articles/single', [
            'article'   => $data
        ]);
    }


    public function add() {
        
        return view('Articles/add', [
            'article'   => $this->entity
        ]);
    }


    public function create() {
        
        $article = $this->entity->fill( $this->request->getPost() );

        $id = $this->model->insert( $article );
        
        if( $id === false  ) {
            return redirect()->back()
                            ->with('errors', $this->model->errors() )
                            ->withInput();
        }

        return redirect()->to('article/'. $id )
                            ->with('message', 'Article added.');
    }


    public function edit( $id ) {
        
        $article = $this->getArticleOr404($id);

        return view('Articles/edit', [
            'article' => $article
        ]);
    }


    public function update( $id ) {

        $article = $this->getArticleOr404($id);

        $article->fill( $this->request->getPost() );


        if( ! $article->hasChanged() ) {
            return redirect()->back()
                            ->with('message', 'Nothing to update. Because values are same.' );
        }

        if( $this->model->save( $article ) ) {
            return redirect()->to('articles/edit/'. $id )
                            ->with('message', 'Article updated.');
        }
        
        return redirect()->back()
                        ->with('errors', $this->model->errors() )
                        ->withInput();
    }


    public function delete( $id ) {

        $article = $this->getArticleOr404($id);

        if( $this->request->is('post') ) {
            $this->model->delete( $id );

            return redirect()->to('articles' )
                            ->with('message', 'Article Deleted.');
        }   

        return view('Articles/delete', [
            'article'    => $article
        ]);
    }


    private function getArticleOr404( $id ) {
        
        $article = $this->model->find($id);

        if( $article === null ) {
            throw new PageNotFoundException('Article '. $id .' no found.');
        }

        return $article;
    }
}