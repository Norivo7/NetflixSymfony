<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMEcEJQJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMEcEJQJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMEcEJQJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMEcEJQJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMEcEJQJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'MEcEJQJ',
    'container.build_id' => '58c6848d',
    'container.build_time' => 1646234872,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMEcEJQJ');
