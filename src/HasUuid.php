<?php

namespace NathanDunn\HasUuid;

use Dyrynda\Database\Support\GeneratesUuid;

trait HasUuid
{
    use GeneratesUuid;

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}