<?php declare(strict_types=1);

namespace Techdriven\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Techdriven\Blog\Model\ResourceModel\Post\Collection as PostCollection;

class Post implements ArgumentInterface
{
    public function __construct(
        private PostCollection $postCollection
    ){}

    public function getList()
    {
        return $this->postCollection->getItems();
    }

    public function getCount(): int
    {
        return $this->postCollection->count();
    }
}

