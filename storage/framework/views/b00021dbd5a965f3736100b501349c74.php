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
    <div class="navbar">
        <div class="navbar-start">
            <h1 class="title is-4">Projects</h1>
        </div>
        <div class="navbar-end">
            <a href="<?php echo e(route('projects.create')); ?>" class="button is-primary">Create a New Project</a>
        </div>
    </div>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <a href="<?php echo e(route('projects.show', $project)); ?>">
                        <?php echo e($project->title); ?> (<?php echo e($project->completed_task_count); ?>/<?php echo e($project->task_count); ?> tasks)
                    </a>
                </div>
            </div>
            <div class="media-right">
            </div>
        </article>
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
<?php /**PATH /var/www/resources/views/projects/index.blade.php ENDPATH**/ ?>