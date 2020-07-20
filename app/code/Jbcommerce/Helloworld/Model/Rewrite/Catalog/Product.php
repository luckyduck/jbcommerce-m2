<?php

namespace Jbcommerce\Helloworld\Model\Rewrite\Catalog;

use function is_array;
use Magento\Framework\App\Filesystem\DirectoryList;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        return sprintf("Custom: %s", parent::getName());
    }

    public function getMediaGalleryImages()
    {
        $directory = $this->_filesystem->getDirectoryRead(DirectoryList::MEDIA);
        if (!$this->hasData('media_gallery_images')) {
            $this->setData('media_gallery_images', $this->_collectionFactory->create());
        }
        if (!$this->getData('media_gallery_images')->count() && is_array($this->getMediaGallery('images'))) {
            $images = $this->getData('media_gallery_images');
            foreach ($this->getMediaGallery('images') as $image) {
                if (!empty($image['disabled'])
                    || !empty($image['removed'])
                    || empty($image['value_id'])
                    || $images->getItemById($image['value_id']) != null
                ) {
                    continue;
                }
                $image['url'] = $this->getMediaConfig()->getMediaUrl($image['file']);
                $image['id'] = $image['value_id'];
                $image['path'] = $directory->getAbsolutePath($this->getMediaConfig()->getMediaPath($image['file']));
                $images->addItem(new \Magento\Framework\DataObject($image));
            }

            //
            // MODIFICATION START (JB):

            // MODIFICATION END
            //

            $this->setData('media_gallery_images', $images);
        }

        return $this->getData('media_gallery_images');
    }
}
