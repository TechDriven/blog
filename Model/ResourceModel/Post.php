<?php
declare(strict_types=1);

namespace Techdriven\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /** @var string Post table name */
    const MAIN_TABLE = 'td_blog_post';

    /** @var string Post table primary key field name */
    const ID_FIELD_NAME = 'id';

    protected function _construct(): void
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
