<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8kkzt1t\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8kkzt1t/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container8kkzt1t.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container8kkzt1t\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container8kkzt1t\appDevDebugProjectContainer();
