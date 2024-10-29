<?php

/*
Copyright (C) 2020 All.In Data GmbH

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

/** @var \AllInData\CF7CRIntegration\Block\Admin\SettingsApiBlock $block */

?>
<div class="wrap">
    <h1><?php _e('Contact Form 7 CleverReach Integration - Settings', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></h1>

    <form action="<?= $block->getFormSubmitUrl() ?>" method="POST">
        <table class="form-table">
            <tr>
                <td>
                    <label for="aid-cf7cr-api-client-id">Client ID: </label>
                </td>
                <td>
                    <input type="text" name="aid-cf7cr-api-client-id" id="aid-cf7cr-api-client-id" value="<?= $block->getApiClientId() ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="aid-cf7cr-api-client-secret">Client Secret: </label>
                </td>
                <td>
                    <input type="password" name="aid-cf7cr-api-client-secret" id="aid-cf7cr-api-client-secret" value="<?= $block->getApiClientSecret() ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="aid-cf7cr-api-token">API Token: </label>
                </td>
                <td>
                    <textarea name="aid-cf7cr-api-token" id="aid-cf7cr-api-token"><?= $block->getApiToken() ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="aid-cf7cr-api-token-expiry-date">API Expiry Date: </label>
                </td>
                <td>
                    <?= $block->getApiTokenExpiryDate() ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="action" value="<?= $block->getActionSlug() ?>" />
                    <input type="hidden" name="target" value="<?= $block->getFormRedirectTarget() ?>" />
                    <input type="submit" value="<?php _e('Save', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?>" />
                </td>
            </tr>
        </table>
    </form>

    <a class="button button-primary" href="<?= $block->getApiTokenRefreshUrl() ?>">
        <?php _e('Refresh your CleverReach API Token', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?>
    </a>
</div>
