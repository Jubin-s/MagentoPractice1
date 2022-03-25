<?php
namespace Custom\PageModule3\Setup\Patch\Data;
 
use Magento\Cms\Model\PageFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
 
class MyCmspage implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
 
    /**
     * @var PageFactory
     */
    private $pageFactory;
    /**
     * @var \Magento\Cms\Model\ResourceModel\Page
     */
    private $pageResource;
 
    /**
     * AddNewCmsPage constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param PageFactory $pageFactory
     * @param \Magento\Cms\Model\ResourceModel\Page $pageResource
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        PageFactory $pageFactory,
        \Magento\Cms\Model\ResourceModel\Page $pageResource
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->pageFactory = $pageFactory;
        $this->pageResource = $pageResource;
    }
 
    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        /*delete the existing page
        $pageIdentifier = 'page_demo1';
        $cmsPageModel = $this->pageFactory->create()->load($pageIdentifier);
        $this->pageResource->delete($cmsPageModel);*/
 
        $pageData = [
            'title' => 'My Page Title',
            'page_layout' => '1column',
            'meta_keywords' => '',
            'meta_description' => '',
            'identifier' => 'page_demo3',
            'content_heading' => '',    
            'content' => '<h1>Content goes here</h1> <img src="{{media url="wysiwyg/img.jpg"}}" />',
            'layout_update_xml' => '',
            'url_key' => 'page_demo3',
            'is_active' => 1,
            'stores' => [0], // store_id comma separated
            'sort_order' => 0
        ];
 
        $this->moduleDataSetup->startSetup();
        /* Save CMS Page logic */
        $this->pageFactory->create()->setData($pageData)->save();
        $this->moduleDataSetup->endSetup();
    }
 
    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }
 
    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}