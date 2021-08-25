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
 * Version file for Facilitation Dashboard
 *
 * @package    local_test
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

/**
 * Class SimpleClass
 */
class SimpleClass {

    // Property declaration.
    /**
     * @var string
     */
    public $name = "Hi My Name is Ash";

    /**
     * @var int
     */
    public $number = 25;

    /**
     * Method displayvar().
     */
    public function displayvar() {

        for ($count = 0; $count <= 10; $count++) {
            echo $this->name;
        }
    }

    /**
     * Method displaynum().
     */
    public function displaynum() {
        echo "This is a Number" . $this->number;
    }
}
