<?php namespace App\Models;

use CodeIgniter\Model;

class LeagueSeasonModel extends Model
{
    protected $table = 'ball_league_season';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_league', 'id_season'];
}
