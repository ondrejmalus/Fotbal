<?php namespace App\Controllers;

use App\Models\GameModel;
use App\Models\TeamModel;

class Matches extends BaseController
{
    public function league($league_season_id)
    {
        $gameModel = new GameModel();
        $teamModel = new TeamModel();

        // načíst všechny zápasy soutěže, seřazené podle kola
        $games = $gameModel->where('id_league_season', $league_season_id)
                           ->orderBy('round', 'ASC')
                           ->orderBy('date', 'ASC')
                           ->findAll();

        $rounds = [];
        foreach ($games as $game) {
            $rounds[$game['round']][] = $game;
        }

        // načíst všechna loga týmů, aby se nemusela hledat v loopu
        $teams = $teamModel->findAll();
        $teams_map = [];
        foreach ($teams as $team) {
            $teams_map[$team['id']] = $team;
        }

        return view('matches/league', [
            'rounds' => $rounds,
            'teams_map' => $teams_map,
            'league_season_id' => $league_season_id
        ]);
    }
    public function view($id)
    {
    $gameModel = new \App\Models\GameModel();
    $teamModel = new \App\Models\TeamModel();

    $game = $gameModel->find($id);
    if (!$game) {
        throw \CodeIgniter\Exceptions\PageNotFoundException('Zápas nebyl nalezen');
    }

    // načíst domácí a hostující tým
    $home = $teamModel->find($game['home_tm']);
    $away = $teamModel->find($game['away_tm']);

    return view('matches/view', [
        'game' => $game,
        'home' => $home,
        'away' => $away
    ]);
    }
}
