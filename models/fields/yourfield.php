<?php
/**
 * package     Your module
 * copyright   Copyright (C) 2014 Joomla Doe
 * license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die( 'Restricted access' );

class JFormFieldYourfield extends JFormField
{
    /**
     * The form field type.
     *
     * @var  string
     * @since 1.6
     */
    protected $type = 'yourfield'; //the form field type see the name is the same

    /**
     * Placeholder
     * Method to retrieve the lists that resides in your application using the API.
     *
     * @return array The field option objects.
     * @since 1.6
     */
    protected function getInput()
    {
        $html='';
        $html.='<p class="'.$this->class.'" id="'.$this->id.'">';
        $html.=$this->value;
        $html.='</p>';
        return $html;
    }

}

?>