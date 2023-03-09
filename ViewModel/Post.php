<?php declare(strict_types=1);

namespace Techdriven\Blog\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Techdriven\Blog\Api\Data\PostInterface;
use Techdriven\Blog\Api\PostRepositoryInterface;
use Techdriven\Blog\Model\ResourceModel\Post\Collection as PostCollection;

class Post implements ArgumentInterface
{
    public function __construct(
        private PostCollection $postCollection,
        private PostRepositoryInterface $postRepository,
        private RequestInterface $request
    ){}

    public function getList()
    {
        return $this->postCollection->getItems();
    }

    public function getCount(): int
    {
        return $this->postCollection->count();
    }

    public function getDetail(): PostInterface
    {
        $id = (int) $this->request->getParam('id');
        return $this->postRepository->getById($id);
    }
}

