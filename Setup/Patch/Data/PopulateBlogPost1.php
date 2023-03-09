<?php declare(strict_types=1);

namespace Techdriven\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Techdriven\Blog\Api\PostRepositoryInterface;
use Techdriven\Blog\Model\Post;
use Techdriven\Blog\Model\PostFactory;

class PopulateBlogPost1 implements DataPatchInterface
{
    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private PostFactory $postFactory,
        private PostRepositoryInterface $postRepository,
    ) {
    }

    /**
     * @return array
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAliases(): array
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        /** @var Post $post */
        $post = $this->postFactory->create();
        $posts = [
            [
                'title' => 'Today is sunny',
                'content' => 'The weather has been great all week.',
            ],
            [
                'title' => 'My movie review',
                'content' => 'I give this movie 5 out of 5 stars!',
            ],
        ];

        foreach ($posts as $postInfo) {
            $post = $this->postFactory->create();
            $post->setData($postInfo);
            $this->postRepository->save($post);
        }

        $this->moduleDataSetup->endSetup();
    }
}
