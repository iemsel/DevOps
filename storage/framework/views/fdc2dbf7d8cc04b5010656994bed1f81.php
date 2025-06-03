<?php if (isset($component)) { $__componentOriginal35c941e3eedad64ac4b6d726d6ef472d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35c941e3eedad64ac4b6d726d6ef472d = $attributes; } ?>
<?php $component = App\View\Components\Layout\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout\Main::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="navbar mb-3">
        <div class="navbar-start">
            <div class="block">
                <h1 class="title is-4">Blog</h1>
                <h2 class="subtitle is-6 is-italic">
                    Welcome to our blog, where productivity meets practicality! Dive into a
                    world of efficiency and organization as we explore tips, tricks, and
                    strategies to conquer your to-do list and elevate your productivity game.
                </h2>
            </div>
        </div>
        <div class="navbar-end">
            <a href="<?php echo e(route('posts.create')); ?>" class="button is-primary">Create a New Blog Post</a>
        </div>
    </div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalf255967efebc9c44eebdc9309ea148f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf255967efebc9c44eebdc9309ea148f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post.list-item','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post.list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf255967efebc9c44eebdc9309ea148f6)): ?>
<?php $attributes = $__attributesOriginalf255967efebc9c44eebdc9309ea148f6; ?>
<?php unset($__attributesOriginalf255967efebc9c44eebdc9309ea148f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf255967efebc9c44eebdc9309ea148f6)): ?>
<?php $component = $__componentOriginalf255967efebc9c44eebdc9309ea148f6; ?>
<?php unset($__componentOriginalf255967efebc9c44eebdc9309ea148f6); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35c941e3eedad64ac4b6d726d6ef472d)): ?>
<?php $attributes = $__attributesOriginal35c941e3eedad64ac4b6d726d6ef472d; ?>
<?php unset($__attributesOriginal35c941e3eedad64ac4b6d726d6ef472d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35c941e3eedad64ac4b6d726d6ef472d)): ?>
<?php $component = $__componentOriginal35c941e3eedad64ac4b6d726d6ef472d; ?>
<?php unset($__componentOriginal35c941e3eedad64ac4b6d726d6ef472d); ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/posts/index.blade.php ENDPATH**/ ?>