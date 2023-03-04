<?php
declare(strict_types=1);

namespace Techdriven\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    /** @var PageFactory */
    private $pageFactory;
    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }
    public function execute(): Page
    {
        die("blog index");
        return $this->pageFactory->create();
    }
}

