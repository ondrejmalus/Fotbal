<?php namespace App\Models;

use CodeIgniter\Model;

class LeagueModel extends Model
{
    protected $table = 'ball_league';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'logo', 'level'];
}
