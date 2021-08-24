<?php

/**
 * Version file for Facilitation Dashboard
 *
 * @package   Local_test
 * @copyright 2021 Wiley Educational Services
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * $plugin->version
 * The current version number of the plugin. The format is partially date
 * based with the form YYYYMMDDXX where XX is an incremental counter for
 * the given year (YYYY), month (MM) and date (DD) of the plugin version's release.
 *
 * $plugin->requires
 * This plugin support Moodle 3.8 and upwards
 */

namespace CodingStandard;

class SimpleClass
{

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
    public function displayvar()
    {

        for ($count = 0; $count <= 10; $count++) {
            echo $this->name;
        }
    }


    /**
     * Method displaynum().
     */
    public function displaynum()
    {
        echo "This is a Number" . $this->number;
    }
}
