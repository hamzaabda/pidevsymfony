<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJbKxPv1\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJbKxPv1/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJbKxPv1.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJbKxPv1\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJbKxPv1\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JbKxPv1',
    'container.build_id' => '661ce6e3',
    'container.build_time' => 1652125940,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJbKxPv1');