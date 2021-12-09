<?php
namespace SEKI\Models;
use SEKI\Core\Preferences;
use SEKI\Managers\Cards;

/*
 * Player: all utility functions concerning a player
 */

class Player extends \SEKI\Helpers\DB_Model {
	protected $table = 'player';
	protected $primary = 'player_id';
	protected $attributes = [
		'id' => 'player_id',
		'no' => 'player_no',
		'name' => 'player_name',
		'color' => 'player_color',
		'eliminated' => 'player_eliminated',
		'score' => 'player_score',
		'zombie' => 'player_zombie',
	];

	/*
		   * Getters
	*/
	public function getPref($prefId) {
		return Preferences::get($this->id, $prefId);
	}

	public function jsonSerialize($currentPlayerId = null) {
		$data = parent::jsonSerialize();
		$current = $this->id == $currentPlayerId;
		$data = array_merge($data, [
			'cards' => $current ? $this->getCards()->toArray() : [],
		]);

		return $data;
	}

	public function getId() {
		return (int) parent::getId();
	}

	public function getCards() {
		return Cards::getOfPlayer($this->id);
	}
}
