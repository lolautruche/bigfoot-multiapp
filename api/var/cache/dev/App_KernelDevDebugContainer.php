<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYbDO1Qt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYbDO1Qt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYbDO1Qt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYbDO1Qt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYbDO1Qt\App_KernelDevDebugContainer([
    'container.build_hash' => 'YbDO1Qt',
    'container.build_id' => 'fb693a8c',
    'container.build_time' => 1688479593,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYbDO1Qt');