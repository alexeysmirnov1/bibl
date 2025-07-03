<?php

foreach(domainList() as $domain) {
    arch('Resources used only in Presentation layer for ' . $domain)
        ->expect(domainNamespace($domain, '\Presentation\Resources'))
        ->toBeClasses()
        ->toOnlyBeUsedIn(domainNamespace($domain, '\Presentation'));
}
