<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRaMz3It\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRaMz3It/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRaMz3It.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRaMz3It\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRaMz3It\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RaMz3It',
    'container.build_id' => 'bd1143f6',
    'container.build_time' => 1561043691,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRaMz3It');
