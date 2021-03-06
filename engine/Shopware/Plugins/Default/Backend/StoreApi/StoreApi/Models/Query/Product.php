<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
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

class Shopware_StoreApi_Models_Query_Product extends Shopware_StoreApi_Models_Query_Query
{
    const ORDER_BY_PLUGIN_NAME = 'a.name',
          ORDER_BY_CREATION_DATE = 'a.datum',
          ORDER_BY_SALES = 'ad.sales';

    protected $validOrderBy = array(
        self::ORDER_BY_PLUGIN_NAME,
        self::ORDER_BY_CREATION_DATE,
        self::ORDER_BY_SALES
    );

    protected $validCriterion = array(
        'Shopware_StoreApi_Models_Query_Criterion_Id',
        'Shopware_StoreApi_Models_Query_Criterion_Version',
        'Shopware_StoreApi_Models_Query_Criterion_OrderNumber',
        'Shopware_StoreApi_Models_Query_Criterion_Category',
        'Shopware_StoreApi_Models_Query_Criterion_Vendor',
        'Shopware_StoreApi_Models_Query_Criterion_Search',
        'Shopware_StoreApi_Models_Query_Criterion_PluginName'
    );

    /**
     * Sets the default order by value
     * @var string
     */
    protected $orderBy = self::ORDER_BY_PLUGIN_NAME;

    /**
     * Sets the default order direction value
     * @var string
     */
    protected $orderDirection = self::ORDER_DIRECTION_ASC;
}