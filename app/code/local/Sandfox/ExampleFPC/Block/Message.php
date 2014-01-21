<?php

class Sandfox_ExampleFPC_Block_Message extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('sandfox/examplefpc/message.phtml');

        /* Alternatively output can be sent with _toHtml() method instead of using template */
    }

    public function getDate()
    {
        return date('F d Y, h:i:s a');
    }
}