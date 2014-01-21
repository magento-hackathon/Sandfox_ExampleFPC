<?php

class Sandfox_ExampleFPC_Model_Container_Message extends Enterprise_PageCache_Model_Container_Abstract
{
    protected function _getCacheId()
    {
        return 'SANDFOX_EXAMPLEFPC_MESSAGE_CACHE' . md5($this->_placeholder->getAttribute('cache_id')) . '_' . $this->_getCookieValue(Enterprise_PageCache_Model_Cookie::COOKIE_CUSTOMER, '');
    }

    protected function _renderBlock()
    {
        $blockClass = $this->_placeholder->getAttribute('block');;
        $template = $this->_placeholder->getAttribute('template');

        /** @var Sandfox_ExampleFPC_Block_Message $block */
        $block = new $blockClass;
        $block->setTemplate($template);

        return $block->toHtml();
    }
}