<?php
/**
 * package     Your module
 * copyright   Copyright (C) 2014 Joomla Doe
 * license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

   /**
   * Script file of Yourmodule module
   */
   class mod_yourmoduleInstallerScript
   {
        /**
         * Method to install the extension
         * $parent is the class calling this method
         *
         * @return void
         */
        function install($parent)
        {
                echo '<p>The module has been installed</p>';
        }

        /**
         * Method to uninstall the extension
         * $parent is the class calling this method
         *
         * @return void
         */
        function uninstall($parent)
        {
                echo '<p>The module has been uninstalled</p>';
        }

        /**
         * Method to update the extension
         * $parent is the class calling this method
         *
         * @return void
         */
        function update($parent)
        {
                echo '<p>The module has been updated to version' . $parent->get('manifest')->version) . '</p>';
        }

        /**
         * Method to run before an install/update/uninstall method
         * $parent is the class calling this method
         * $type is the type of change (install, update or discover_install)
         *
         * @return void
         */
        function preflight($type, $parent)
        {
                echo '<p>Anything here happens before the installation/update/uninstallation of the module</p>';
        }

        /**
         * Method to run after an install/update method
         * $parent is the class calling this method
         * $type is the type of change (install, update or discover_install)
         *
         * @return void
         */
        function postflight($type, $parent)
        {
                echo '<p>Anything here happens after the installation/update of the module '.$type.'</p>';
			//	$parent->getParent()->setRedirectURL('index.php?option=com_modules');
        }
}
