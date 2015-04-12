<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * mod/taskchain/version.php
 *
 * @package    mod
 * @subpackage taskchain
 * @copyright  2010 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 */

// prevent direct access to this script
defined('MOODLE_INTERNAL') || die();

if (floatval($GLOBALS['CFG']->release) <= 2.6) {
    $plugin = new stdClass();
}

$plugin->cron      = 0; // 60
$plugin->component = 'mod_taskchain';
$plugin->maturity  = MATURITY_STABLE; // ALPHA=50, BETA=100, RC=150, STABLE=200
$plugin->requires  = 2010112400; // Moodle 2.0
$plugin->release   = '2015.04.12 (74)';
$plugin->version   = 2015041274;

if (floatval($GLOBALS['CFG']->release) <= 2.6) {
    $module = clone($plugin);
}
