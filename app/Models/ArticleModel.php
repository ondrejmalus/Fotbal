<?php namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'ball_article';
    protected $primaryKey = 'id';
    protected $allowedFields = ['link','photo','date','top','published','text'];
}
