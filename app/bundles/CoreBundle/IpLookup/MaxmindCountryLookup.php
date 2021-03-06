<?php
/**
 * @package     Mautic
 * @copyright   2015 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle\IpLookup;

/**
 * Class MaxmindCountryLookup
 */
class MaxmindCountryLookup extends MaxmindLookup
{
    /**
     * @return string
     */
    protected function getName()
    {
        return 'maxmind_country';
    }
}