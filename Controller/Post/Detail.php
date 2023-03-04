<?php
declare(strict_types=1);

namespace Techdriven\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Veiw\Result\Page;

class Detail implements HttpGetActionInterface
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
        die("Blog post detail");
        return $this->pageFactory->create();
    }
}
