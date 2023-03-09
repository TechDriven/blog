<?php
declare(strict_types=1);

namespace Techdriven\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Techdriven\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct(): void
    {
        $this->_init(ResourceModel\Post::class);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
}
