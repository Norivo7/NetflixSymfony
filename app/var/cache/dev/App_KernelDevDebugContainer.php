<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRx6L9Uj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRx6L9Uj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRx6L9Uj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRx6L9Uj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRx6L9Uj\App_KernelDevDebugContainer([
    'container.build_hash' => 'Rx6L9Uj',
    'container.build_id' => '552c226f',
    'container.build_time' => 1644605323,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRx6L9Uj');
