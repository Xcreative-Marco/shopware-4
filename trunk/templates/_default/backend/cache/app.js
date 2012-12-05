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
 *
 * @category   Shopware
 * @package    Shopware_Cache
 * @subpackage Cache
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Cache module
 *
 * todo@all: Documentation
 */
//{block name="backend/cache/application"}
Ext.define('Shopware.apps.Cache', {

    extend: 'Enlight.app.SubApplication',

    initGlobal: false,
    bulkLoad: true,
    loadPath: '{url action=load}',

    defaultController: 'Main',



    /**
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     */
    launch: function() {
        var me = this;

        if (me.action) {
            me.controllerName = 'Direct';
        } else {
            me.controllerName =  me.defaultController;
        }

        me.controller = me.addController({
            name: me.controllerName,
            action: me.action,
            params: me.params
        });

        var mainController = me.getController(me.controllerName);

        return mainController.mainWindow;
    }
});
//{/block}
