<?php
declare(strict_types=1);

namespace Techdriven\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Techdriven\Blog\Model\ResourceModel\Post as PostResourceModel;
use Techdriven\Blog\Model\Post;

class Collection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
