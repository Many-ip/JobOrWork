<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLGGS6Q5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLGGS6Q5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLGGS6Q5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLGGS6Q5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLGGS6Q5\App_KernelDevDebugContainer([
    'container.build_hash' => 'LGGS6Q5',
    'container.build_id' => 'f56c9c18',
    'container.build_time' => 1584001132,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLGGS6Q5');