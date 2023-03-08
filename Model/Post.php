<?php
declare(strict_types=1);

namespace Techdriven\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct(): void
    {
        $this->_init(ResourceModel\Post::class);
    }
}
