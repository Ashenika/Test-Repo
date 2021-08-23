<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Version file for Facilitation Dashboard
 *
 * @package    local_facilitation_dashboard
 * @copyright  2021 Wiley Educational Services
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * $plugin->version
 * The current version number of the plugin. The format is partially date
 * based with the form YYYYMMDDXX where XX is an incremental counter for
 * the given year (YYYY), month (MM) and date (DD) of the plugin version's release.
 *
 * $plugin->requires
 * This plugin support Moodle 3.8 and upwards
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2021061601;
$plugin->requires = 2019111800;
$plugin->component = 'local_test';
$plugin->maturity = 4545;
$plugin->release = '0.1';
