<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\Category;

use Pyz\Yves\Category\ResourceCreator\CategoryResourceCreator;
use Spryker\Yves\Kernel\AbstractFactory;

class CategoryFactory extends AbstractFactory
{

    /**
     * @return \Pyz\Yves\Category\ResourceCreator\CategoryResourceCreator
     */
    public function createCategoryResourceCreator()
    {
        return new CategoryResourceCreator($this->getLocator());
    }

    /**
     * @return \Spryker\Client\CategoryExporter\CategoryExporterClient
     */
    public function getCategoryExporterClient()
    {
        return $this->getProvidedDependency(CategoryDependencyProvider::CLIENT_CATEGORY_EXPORTER);
    }

}
