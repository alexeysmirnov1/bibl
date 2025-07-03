<?php

$modules = domainList();

$modules = [
    ...array_map(
        fn($domain) => domainNamespace($domain, '\Infrastructure\Repositories'),
        $modules
    ),
    ...array_map(
        fn($domain) => domainNamespace($domain, '\Infrastructure\Commands'),
        $modules
    ),
    ...array_map(
        fn($domain) => domainNamespace($domain, '\Presentation'),
        $modules
    ),
    ...array_map(
        fn($module) => 'Database\\',
        $modules
    ),
    ...array_map(
        fn($module) => 'App\Models\\',
        $modules
    ),
    ...array_map(
        fn($module) => 'App\Nova\\',
        $modules
    ),
];

arch('Models is allowed only in Repositories')
    ->expect('App\Models')
    ->toBeClasses()
    ->toOnlyBeUsedIn($modules);
