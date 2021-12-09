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
 * sekigahara.view.php
 *
 */

require_once APP_BASE_PATH . 'view/common/game.view.php';

class view_sekigahara_sekigahara extends game_view {
	function getGameName() {
		return 'sekigahara';
	}
	function build_page($viewArgs) {
	}
}
