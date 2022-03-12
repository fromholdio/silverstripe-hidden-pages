<?php

namespace Fromholdio\HiddenPages\Extensions;

use SilverStripe\CMS\Model\SiteTreeExtension;

class HiddenPageExtension extends SiteTreeExtension
{
    private static $need_permission = ['Create'];

    public function canCreate($member, $context = []): ?bool
    {
        return false;
    }
}
