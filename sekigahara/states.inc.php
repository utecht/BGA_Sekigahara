<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * Sekigahara implementation : © Joseph Utecht <joseph@utecht.co>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * states.inc.php
 *
 * sekigahara game states description
 *
 */

$machinestates = [
	// The initial state. Please do not modify.
	ST_GAME_SETUP => [
		'name' => 'gameSetup',
		'description' => '',
		'type' => 'manager',
		'action' => 'stGameSetup',
		'transitions' => ['' => ST_SEKI],
	],

	ST_SEKI => [
		'name' => 'playerTurn',
		'description' => clienttranslate('${actplayer} must play a card or pass'),
		'descriptionmyturn' => clienttranslate('${you} must play a card or pass'),
		'type' => 'activeplayer',
		'possibleactions' => ['actPlayCard', 'actPpass'],
		'transitions' => ['done' => ST_SEKI],
	],

	// Final state.
	// Please do not modify (and do not overload action/args methods).
	ST_END_GAME => [
		'name' => 'gameEnd',
		'description' => clienttranslate('End of game'),
		'type' => 'manager',
		'action' => 'stGameEnd',
		'args' => 'argGameEnd',
	],
];
