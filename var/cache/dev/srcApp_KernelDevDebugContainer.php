<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerABdXW8x\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerABdXW8x/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerABdXW8x.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerABdXW8x\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerABdXW8x\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ABdXW8x',
    'container.build_id' => 'b453c7fb',
    'container.build_time' => 1650806282,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerABdXW8x');