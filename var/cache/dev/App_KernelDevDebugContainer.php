<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerClIN3dn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerClIN3dn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerClIN3dn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerClIN3dn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerClIN3dn\App_KernelDevDebugContainer([
    'container.build_hash' => 'ClIN3dn',
    'container.build_id' => '5af41781',
    'container.build_time' => 1584883561,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerClIN3dn');
