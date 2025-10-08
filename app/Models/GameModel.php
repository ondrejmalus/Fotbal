<?php namespace App\Models;

use CodeIgniter\Model;

class GameModel extends Model
{
    protected $table = 'ball_game';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_league_season','home','away','home_tm','away_tm',
        'date','time','round','stadium','attendance',
        'goals_home','goals_away','ht_goals_home','ht_goals_away',
        'link','finished','created_at','updated_at','deleted_at'
    ];
}
