<?php namespace App\Controllers;

use App\Models\SeasonModel;
use App\Models\LeagueSeasonModel;
use App\Models\LeagueModel;

class Seasons extends BaseController
{
    public function view($id)
    {
        $seasonModel = new SeasonModel();
        $leagueSeasonModel = new LeagueSeasonModel();
        $leagueModel = new LeagueModel();

        // načíst sezónu
        $season = $seasonModel->find($id);
        if (!$season) {
            throw \CodeIgniter\Exceptions\PageNotFoundException('Sezóna nebyla nalezena');
        }

        // načíst všechny ligy pro tuto sezónu
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

        return view('seasons/view', [
            'season' => $season,
            'competitions' => $competitions
        ]);
    }
}
