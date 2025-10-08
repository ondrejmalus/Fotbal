<?php namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'ball_team';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','logo','tm_id'];
}
