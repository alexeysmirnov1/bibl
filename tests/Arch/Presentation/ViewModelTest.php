<?php

$domains = domainList();

foreach($domains as $domain) {
    arch('Extend Abstract ViewModel for' . $domain)
        ->expect(domainNamespace($domain, '\Presentation\ViewModels'))
        ->toBeClasses()
        ->toExtend('Domoteka\Common\Presentation\AbstractViewModel');
}

foreach($domains as $domain) {
    arch('ViewModel to be only used in ' . $domain)
        ->expect(domainNamespace($domain, '\Presentation\ViewModels'))
        ->toBeClasses()
        ->toOnlyBeUsedIn(domainNamespace($domain, '\Presentation\Controllers'));
}
