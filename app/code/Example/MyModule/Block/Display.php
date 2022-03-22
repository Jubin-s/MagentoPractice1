<?php
namespace Example\MyModule\Block;
use Example\MyModule\Helper\MyHelper;

class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
	MyHelper $helper)
	{
		$this->helper = $helper;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return __('Hello World');
	}
	public function storeData()
    {
        return $this->helper;
    }
}