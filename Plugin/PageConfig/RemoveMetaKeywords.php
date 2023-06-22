<?php
/*
 *  SOZO Design Ltd
 *
 *  NOTICE OF LICENSE
 *
 *  This source file is subject to the Open Software License (OSL 3.0)
 *  that is bundled with this package in the file LICENSE.
 *  It is also available through the world-wide-web at this URL:
 *  http://opensource.org/licenses/osl-3.0.php
 *
 *  @category    SOZO Design Ltd
 *  @package     Sozo_RemoveMetaKeywords
 *  @copyright   Copyright (c) SOZO Design Ltd (https://sozodesign.co.uk)
 *  @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

declare(strict_types=1);

namespace Sozo\RemoveMetaKeywords\Plugin\PageConfig;

class RemoveMetaKeywords
{
    public function afterGetKeywords($subject, $return)
    {
        return '';
    }
}
