<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Script file of HelloWorld component
 */
class com_odudecardInstallerScript
{
        /**
         * method to install the component
         *
         * @return void
         */
        function install($parent)
        {
                @chdir(JPATH_ROOT."/images/ecard");
    $oldumask = umask(0);
    @mkdir(JPATH_ROOT."/images/ecard/", 0755);
    umask($oldumask);

$topath=JPATH_ROOT.DS.'images'.DS.'ecard'.DS;
   $frompath=JPATH_ROOT.DS.'components'.DS.'com_odudecard'.DS.'images'.DS;
   if (copy($frompath."birthday.jpg", $topath."birthday.jpg"))
   {
    echo "Sample Large Card copied <br>";
}

   if (copy($frompath."birthday_ss.jpg", $topath."birthday_ss.jpg"))
   {
    echo "Sample Thumbnail copied <br>";
}
   if (copy($frompath."birthday_banner.jpg", $topath."birthday_banner.jpg"))
   {
    echo "Sample Banner copied <br>";
}
   if (copy($frompath."birthday_bg.gif", $topath."birthday_bg.gif"))
   {
    echo "Sample Background Image copied <br>";
}

        }

        /**
         * method to uninstall the component
         *
         * @return void
         */
        function uninstall($parent)
        {
                	echo "Component successfully uninstalled.<br /><br />";
	echo "<p style='font-family:Verdana; size: 12px;'>Please keep in mind that the <code>/images/ecard/</code> directory is <strong>NOT</strong> deleted. You have to do this by hand.<br> If you upgrade, your images are all still there.</p><br /><br />";
	echo "<p style=\"text-align:center;\">&copy; Copyright 2009 by ODude - <a href=\"http://www.odude.com\" target=\"_blank\">ODude</a></p>";

        }

        /**
         * method to update the component
         *
         * @return void
         */
        function update($parent)
        {
                // $parent is the class calling this method
               // echo '<p>' . JText::_('COM_HELLOWORLD_UPDATE_TEXT') . '</p>';
        }

        /**
         * method to run before an install/update/uninstall method
         *
         * @return void
         */
        function preflight($type, $parent)
        {
                // $parent is the class calling this method
                // $type is the type of change (install, update or discover_install)
                //echo '<p>' . JText::_('COM_HELLOWORLD_PREFLIGHT_' . $type . '_TEXT') . '</p>';
        }

        /**
         * method to run after an install/update/uninstall method
         *
         * @return void
         */
        function postflight($type, $parent)
        {
                // $parent is the class calling this method
                // $type is the type of change (install, update or discover_install)
               // echo '<p>' . JText::_('COM_HELLOWORLD_POSTFLIGHT_' . $type . '_TEXT') . '</p>';
        }
}
?>


