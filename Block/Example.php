<?php
/**
 *
 * @package     magento2
 * @author      Yusuf Pangal
 * @support     yusufpangal@gmail.com
 * @link        https://www.magentohocasi.com/
 */

namespace MageSheet\Example\Block;


use Magento\Framework\View\Element\Template;

class Example extends Template
{
    /**
     * @return string
     */
    public function getContent() {
        return "Hello World, Welcome to Magento";
    }
}