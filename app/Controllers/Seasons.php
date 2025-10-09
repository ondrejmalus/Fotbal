<?php namespace App\Controllers;

use App\Models\SeasonModel;
use App\Models\LeagueSeasonModel;
use App\Models\LeagueModel;

class Seasons extends BaseController
{
    public function index()
    {
        $seasonModel = new SeasonModel();
        $seasons = $seasonModel->orderBy('start', 'DESC')->findAll();

        return view('seasons/season', [
            'seasons' => $seasons
        ]);
    }

    // 🟡 /sezona/{id} – zobrazí detail konkrétní sezóny + soutěže
    public function detail($id)
    {
        $seasonModel = new SeasonModel();
        $leagueSeasonModel = new LeagueSeasonModel();
        $leagueModel = new LeagueModel();

        $season = $seasonModel->find($id);
        if (!$season) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Sezóna nebyla nalezena');
        }

        $leagueSeasons = $leagueSeasonModel->where('id_season', $id)->findAll();
        $competitions = [];
        foreach ($leagueSeasons as $ls) {
            $league = $leagueModel->find($ls['id_league']);
            if ($league) {
                $competitions[] = [
                    'id_league_season' => $ls['id'],
                    'name' => $league['name'],
                    'level' => $league['level'],
                    'logo' => $league['logo']
                ];
            }
        }

        return view('seasons/matches/league', [
            'season' => $season,
            'competitions' => $competitions
        ]);
    }
}
