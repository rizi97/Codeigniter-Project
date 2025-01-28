<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table  = 'articles';

    protected $allowedFields = ['title', 'description'];

    protected $returnType = 'App\Entities\ArticleEntity';

    protected $validationRules = [
        'title'         => 'required|max_length[30]',
        'description'   => 'required'
    ];
}