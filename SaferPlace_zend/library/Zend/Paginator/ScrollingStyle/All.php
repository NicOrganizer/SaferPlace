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
 * @package    Zend_Paginator
<<<<<<< HEAD
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
=======
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: All.php 24593 2012-01-05 20:35:02Z matthew $
>>>>>>> b22d39626ae65c380360f646196dad1e164aa76f
 */

/**
 * @see Zend_Paginator_ScrollingStyle_Interface
 */
require_once 'Zend/Paginator/ScrollingStyle/Interface.php';

/**
 * A scrolling style that returns every page in the collection.
 * Useful when it is necessary to make every page available at
 * once--for example, when using a dropdown menu pagination control.
 *
 * @category   Zend
 * @package    Zend_Paginator
<<<<<<< HEAD
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
=======
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
>>>>>>> b22d39626ae65c380360f646196dad1e164aa76f
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Paginator_ScrollingStyle_All implements Zend_Paginator_ScrollingStyle_Interface
{
    /**
     * Returns an array of all pages given a page number and range.
     *
     * @param  Zend_Paginator $paginator
     * @param  integer $pageRange Unused
     * @return array
     */
    public function getPages(Zend_Paginator $paginator, $pageRange = null)
    {
        return $paginator->getPagesInRange(1, $paginator->count());
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> b22d39626ae65c380360f646196dad1e164aa76f
