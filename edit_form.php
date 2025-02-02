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
 * Form for editing group_members block instances.
 *
 * @package     block_group_members
 * @copyright   2021 CALL Learning <laurent@call-learning.fr>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use block_group_members\output\group_members;

/**
 * Form for editing block_group_members block instances.
 *
 * @package    block_group_members
 * @copyright  2021 CALL Learning <laurent@call-learning.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_group_members_edit_form extends block_edit_form {

    /**
     * Extends the configuration form for block_group_members.
     * @param object $mform
     * @throws coding_exception
     */
    protected function specific_definition($mform) {

        // Section header title.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        $mform->addElement('text',
            'config_title',
            get_string('title', 'block_group_members')
        );
        $mform->setDefault('config_title', get_string('pluginname', 'block_group_members'));
        $mform->setType('config_title', PARAM_TEXT);
        $mform->addElement('text', 'config_maxmembers', get_string('maxmembers', 'block_group_members'));
        $mform->setDefault('config_maxmembers', group_members::DEFAULT_MAX_MEMBERS);
        $mform->setType('config_maxmembers', PARAM_INT);
    }
}
