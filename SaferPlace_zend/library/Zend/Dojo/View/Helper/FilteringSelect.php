<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage View
<<<<<<< HEAD
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
=======
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: FilteringSelect.php 24593 2012-01-05 20:35:02Z matthew $
>>>>>>> b22d39626ae65c380360f646196dad1e164aa76f
 */

/** Zend_Dojo_View_Helper_ComboBox */
require_once 'Zend/Dojo/View/Helper/ComboBox.php';

/**
 * Dojo FilteringSelect dijit
 *
 * @uses       Zend_Dojo_View_Helper_ComboBox
 * @package    Zend_Dojo
 * @subpackage View
<<<<<<< HEAD
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
=======
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
>>>>>>> b22d39626ae65c380360f646196dad1e164aa76f
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
  */
class Zend_Dojo_View_Helper_FilteringSelect extends Zend_Dojo_View_Helper_ComboBox
{
    /**
     * Dijit being used
     * @var string
     */
    protected $_dijit  = 'dijit.form.FilteringSelect';

    /**
     * Dojo module to use
     * @var string
     */
    protected $_module = 'dijit.form.FilteringSelect';

    /**
     * dijit.form.FilteringSelect
     *
     * @param  int $id
     * @param  mixed $value
     * @param  array $params  Parameters to use for dijit creation
     * @param  array $attribs HTML attributes
     * @param  array|null $options Select options
     * @return string
     */
    public function filteringSelect($id, $value = null, array $params = array(), array $attribs = array(), array $options = null)
    {
        return $this->comboBox($id, $value, $params, $attribs, $options);
    }
}
