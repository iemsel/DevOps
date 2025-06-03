<article class="media">
    <div class="media-left">
        <?php if (isset($component)) { $__componentOriginal879d4bb2e2d8d143257782ce17bed88b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal879d4bb2e2d8d143257782ce17bed88b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.task.state-icon','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('task.state-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal879d4bb2e2d8d143257782ce17bed88b)): ?>
<?php $attributes = $__attributesOriginal879d4bb2e2d8d143257782ce17bed88b; ?>
<?php unset($__attributesOriginal879d4bb2e2d8d143257782ce17bed88b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal879d4bb2e2d8d143257782ce17bed88b)): ?>
<?php $component = $__componentOriginal879d4bb2e2d8d143257782ce17bed88b; ?>
<?php unset($__componentOriginal879d4bb2e2d8d143257782ce17bed88b); ?>
<?php endif; ?>
    </div>
    <div class="media-content">
        <div class="content">
            <a href="<?php echo e(route('tasks.show', $task['id'])); ?>">
                <?php echo e($task['title']); ?>

            </a>
            <br>
            <div class="tags">
        <span class="tag has-text-weight-bold">
            <?php echo e($task['state']); ?>

        </span>
                <?php if (isset($component)) { $__componentOriginal1920fd4fd3d789b9d76d2a4952d2abda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1920fd4fd3d789b9d76d2a4952d2abda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.task.priority-tag','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('task.priority-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1920fd4fd3d789b9d76d2a4952d2abda)): ?>
<?php $attributes = $__attributesOriginal1920fd4fd3d789b9d76d2a4952d2abda; ?>
<?php unset($__attributesOriginal1920fd4fd3d789b9d76d2a4952d2abda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1920fd4fd3d789b9d76d2a4952d2abda)): ?>
<?php $component = $__componentOriginal1920fd4fd3d789b9d76d2a4952d2abda; ?>
<?php unset($__componentOriginal1920fd4fd3d789b9d76d2a4952d2abda); ?>
<?php endif; ?>
            </div>

        </div>
    </div>
    <div class="media-right">
    </div>
</article>
<?php /**PATH /var/www/resources/views/components/task/list-item.blade.php ENDPATH**/ ?>