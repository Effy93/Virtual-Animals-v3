<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM8zE4eA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM8zE4eA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM8zE4eA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM8zE4eA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerM8zE4eA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'M8zE4eA',
    'container.build_id' => '5d6de864',
    'container.build_time' => 1556937552,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM8zE4eA');
