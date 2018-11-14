<?php

namespace Huubl\Elements\Timeline\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

/**
 * Class LeftAndMainExtension.
 */
class LeftAndMainExtension extends Extension
{
    public function init()
    {
        Requirements::css('huubl/silverstripe-elemental-Timeline: icons/icons.css');
    }
}
