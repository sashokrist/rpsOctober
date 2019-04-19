<?php namespace Sasho\Rps\Components;

use Cms\Classes\ComponentBase;
use Redirect;
use Flash;
use Auth;
use Sasho\Rps\Models\Game;
use Illuminate\Support\Facades\Session;

class Games extends ComponentBase{

    public function componentDetails()
    {
        return [
            'name' => 'RPS',
            'description' => 'rock paper scissors game'
        ];
    }

    function init()
    {
        $user = Auth::getUser();

        $newGame = new Game;
        $newGame->user_id = $user->id;
        $newGame->avatar = null;
        $newGame->name = $user->username;
        $newGame->save();

        Session::put('newGame', $newGame->id);
    }

    public function onPlay()
    {
        $gameId = Session::get('newGame');
        $game = Game::find($gameId);
        dd($game);

        $data = post('sel');

        $options = array("rock", "paper", "scissors");
        $computer = $options[rand(0, 2)];

        if ($data == 'scissors' && $computer == 'paper' ||
            $data == 'paper' && $computer == 'rock' ||
            $data == 'rock' && $computer == 'scissors') :
            $result = 'Win';
        endif;

        if ($computer == 'scissors' && $data == 'paper' ||
            $computer == 'paper' && $data == 'rock' ||
            $computer == 'rock' && $data == 'scissors') :
            $result = 'Lost';
        endif;

        if ($data == $computer) :
            $result = 'Tie';
        endif;

        Flash::success($result);
    }
}
