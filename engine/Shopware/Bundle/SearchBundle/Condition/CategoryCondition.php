<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\SearchBundle\Condition;

use Shopware\Bundle\SearchBundle\ConditionInterface;

/**
 * @category  Shopware
 * @package   Shopware\Bundle\SearchBundle\Condition
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
class CategoryCondition implements ConditionInterface
{
    /**
     * @var array
     */
    private $categoryIds;

    /**
     * @param $categoryIds
     */
    public function __construct(array $categoryIds)
    {
        $this->categoryIds = $categoryIds;
    }

    /**
     * @return array
     */
    public function getCategoryIds()
    {
        return $this->categoryIds;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}