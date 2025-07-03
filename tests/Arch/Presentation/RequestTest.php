<?php

foreach(domainList() as $domain) {
    arch('Requests used only in Controllers for ' . $domain)
        ->expect(domainNamespace($domain, '\Presentation\Requests'))
        ->toBeClasses()
        ->toOnlyBeUsedIn(domainNamespace($domain, '\Presentation\Controllers'));
}
