<?php

namespace App\Models;

use CodeIgniter\Model;

class NavbarModel extends Model
{
    protected $table = 'ball_navbar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'url', 'position'];

    public function getMenu()
    {
        return $this->findAll();
    }
}
