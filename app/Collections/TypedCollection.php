<?php

declare(strict_types=1);

namespace App\Collections;

use Illuminate\Support\Arr;

abstract class TypedCollection extends \Gamez\Illuminate\Support\TypedCollection
{
    protected function assertValidType($item): void
    {
        foreach (static::$allowedTypes as $allowedType) {
            $allowedTypeItems = Arr::wrap($allowedType);

            $allow = array_filter($allowedTypeItems, fn($type) => $item instanceof $type);

            if (count($allow) == count($allowedTypeItems)) {
                return;
            }
        }

        throw new \InvalidArgumentException(sprintf(
            'A %s collection only accepts objects of the following type(s): %s. Given %s',
            get_class($this), json_encode(static::$allowedTypes), is_object($item) ? get_class($item) : $item,
        ));
    }
}
