<?php

namespace Fromholdio\HiddenPages\Extensions;

use SilverStripe\Core\Extension;

class HiddenPageExtension extends Extension
{
    private static $need_permission = ['Create'];

    public function canCreate($member, $context = []): ?bool
    {
        return false;
    }
}
