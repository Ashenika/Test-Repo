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

class SimpleClass {

    // Property declaration.
    public $name = "Hi My Name is Ash";
    public $number = 25;

    // Method declarationg.
    public function displayvar() {

        for ($count = 0; $count <= 10; $count++) {
            echo $this->name;
        }
    }

    // Method declaration.
    public function displaynum() {
        echo "This is a Number" . $this->number;
    }
}
