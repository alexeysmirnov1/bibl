<?php

arch('Only strict types are allowed in App')
    ->expect('App')
    ->toUseStrictTypes();
// arch('Only strict types are allowed in Domoteka')
//    ->expect('Domoteka')
//    ->toUseStrictTypes();

arch('Not allowed to use dd in App')
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump']);
arch('Not allowed to use dd in Domoteka')
    ->expect('Domoteka')
    ->not->toUse(['die', 'dd', 'dump']);
