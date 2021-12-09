<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * Sekigahara implementation : © Joseph Utecht <joseph@utecht.co>
 *
 * This code has been produced on the BGA studio platform for use on https://boardgamearena.com.
 * See http://en.doc.boardgamearena.com/Studio for more information.
 * -----
 *
 * sekigahara.action.php
 *
 * sekigahara main action entry point
 *
 */

class action_sekigahara extends APP_GameAction {
	// Constructor: please do not modify
	public function __default() {
		if (self::isArg('notifwindow')) {
			$this->view = 'common_notifwindow';
			$this->viewArgs['table'] = self::getArg('table', AT_posint, true);
		} else {
			$this->view = 'sekigahara_sekigahara';
			self::trace('Complete reinitialization of board game');
		}
	}

	public function actChangePref() {
		self::setAjaxMode();
		$pref = self::getArg('pref', AT_posint, false);
		$value = self::getArg('value', AT_posint, false);
		$this->game->actChangePreference($pref, $value);
		self::ajaxResponse();
	}
}
