<?php

/*
Copyright (C) 2018 All.In Data GmbH

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/**
 * Plugin Name: Wordpress Contact Form 7 CleverReach Integration
 * Description: Push Contact Form 7 information to CleverReach
 * Version: 2.0.0
 * Depends: Contact Form 7
 * Author: All.In Data GmbH
 * Author URI: https://www.all-in-data.de
 * Text Domain: allindata-cf7-cleverreach-integration
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * WC requires at least: 5.0.0
 * WC tested up to: 5.4.0
 */

defined('ABSPATH') or exit;

require __DIR__ . '/vendor/autoload.php';

class AllInDataContactForm7CleverReachIntegration extends \AllInData\Micro\Core\Init
{
    const PLUGIN_CONFIGURATION = \AllInData\CF7CRIntegration\PluginConfiguration::class;
    const SLUG = 'allindata-cf7-cleverreach-integration';
    const VERSION = '2.0.0';
    const TEMPLATE_DIR = __DIR__ . '/view/';
    const TEMP_DIR = ABSPATH . 'tmp/';
    const FILE = __FILE__;
}
add_action('allindata/micro/core/init', [AllInDataContactForm7CleverReachIntegration::class, 'init']);