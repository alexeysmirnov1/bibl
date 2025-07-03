<?php

function domainList(): array
{
    return array_filter(
        scandir('./src'),
        fn($item) => !in_array($item, ['Common', '.', '..'])
    );
}

function domainNamespace(string $domain, string $concrete = ''): string
{
    return sprintf(
        'Domoteka\%s%s',
        $domain,
        $concrete
    );
}
