<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5SxZ237\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5SxZ237/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5SxZ237.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5SxZ237\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5SxZ237\App_KernelDevDebugContainer([
    'container.build_hash' => '5SxZ237',
    'container.build_id' => 'a9a425db',
    'container.build_time' => 1585353636,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5SxZ237');