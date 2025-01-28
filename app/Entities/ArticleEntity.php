<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ArticleEntity extends Entity
{
    protected $attributes = [
        'title' => '',  
        'description' => '',  
    ];
    
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];


    // Mutations
    protected function setDescription(string $description) {
        $this->attributes['description'] = $description . "...";
    }



    // Accessors
    protected function getTitle() {
        return strtoupper( $this->attributes['title'] );
    }
}
