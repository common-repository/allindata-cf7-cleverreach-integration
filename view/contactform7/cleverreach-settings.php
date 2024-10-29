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

/** @var \AllInData\CF7CRIntegration\Block\Admin\ContactForm7\CleverReachSettingsBlock $block */

?>
<div class="aid-cf7cr-form-settings">
    <h2><?php _e('CleverReach Integration', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></h2>
    <h3><?php _e('General Settings', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></h3>

    <table class="general-settings">
        <tr>
            <th><?php _e('Enabled', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></th>
            <td>
                <input type="checkbox"
                       name="aid-cf7cr-form-settings-enabled" <?php if ($block->isCleverReachIntegrationEnabled()): ?>checked="checked"<?php endif; ?>>
            </td>
        </tr>
        <tr>
            <th><?php _e('Targeted Group', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></th>
            <td>
                <select name="aid-cf7cr-form-settings-group">
                    <option value=""><?php _e('Choose one group...', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></option>
                    <?php foreach ($block->getGroupSelection() as $group): ?>
                        <option value="<?= $group->getId(); ?>" <?php if ($block->isGroupSelected($group)): ?>selected="selected"<?php endif; ?>>
                            <?= $group->getName(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>

    <?php if ($block->getActiveGroup()): ?>
    <h3><?php _e('Subscription', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></h3>
    <table class="forms">
        <tr>
            <th><?php _e('Subscription Form', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></th>
            <td>
                <select name="aid-cf7cr-form-settings-form">
                    <option value=""><?php _e('Choose one form...', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></option>
                    <?php foreach ($block->getFormSelection() as $form): ?>
                        <option value="<?= $form->getId(); ?>" <?php if ($block->isFormSelected($form)): ?>selected="selected"<?php endif; ?>>
                            <?= $form->getName(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

    <h3><?php _e('Mapping', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></h3>

    <table class="mapping">
        <?php foreach ($block->getContactForm7FieldSelection() as $fieldId => $fieldName): ?>
        <tr>
            <th><?= $fieldName ?></th>
            <td>
                <select name="aid-cf7cr-form-settings-mapping[<?= $fieldId ?>]">
                    <option value=""><?php _e('Choose one field...', \AllInDataContactForm7CleverReachIntegration::load()->getTextDomain()); ?></option>
                    <?php foreach ($block->getGroupAttributeSelection() as $attribute): ?>
                        <option value="<?= $attribute->getId(); ?>" <?php if ($block->isAttributeSelected($fieldId, $attribute)): ?>selected="selected"<?php endif; ?>>
                            <?= $attribute->getName(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>