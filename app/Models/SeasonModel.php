<?php namespace App\Models;

use CodeIgniter\Model;

class SeasonModel extends Model
{
    protected $table = 'ball_season';
    protected $primaryKey = 'id';
    protected $allowedFields = ['start', 'finish'];
}
