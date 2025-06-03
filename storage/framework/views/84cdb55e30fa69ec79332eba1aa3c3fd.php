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
            <div class="block">
                <h1 class="title is-4">My TODOs</h1>
                <h2 class="subtitle is-6 is-italic">
                    Completing your tasks brings a sense of achievement, increases productivity,
                    reduces stress, and helps you manage your time effectively. It creates a
                    positive feedback loop, encourages you to prioritize important tasks, and
                    provides opportunities to reward yourself. So, dive in, conquer your tasks,
                    and enjoy the numerous benefits that come with it! You've got this!
                </h2>
            </div>
        </div>
        <div class="navbar-end">
            <a href="<?php echo e(route('tasks.create')); ?>" class="button is-primary">Create a New Task</a>
        </div>
    </div>
    <div class="block">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc72ef7144cc76fabdec81e46047f6cf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc72ef7144cc76fabdec81e46047f6cf0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.task.list-item','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('task.list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc72ef7144cc76fabdec81e46047f6cf0)): ?>
<?php $attributes = $__attributesOriginalc72ef7144cc76fabdec81e46047f6cf0; ?>
<?php unset($__attributesOriginalc72ef7144cc76fabdec81e46047f6cf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc72ef7144cc76fabdec81e46047f6cf0)): ?>
<?php $component = $__componentOriginalc72ef7144cc76fabdec81e46047f6cf0; ?>
<?php unset($__componentOriginalc72ef7144cc76fabdec81e46047f6cf0); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
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
<?php /**PATH /var/www/resources/views/welcome.blade.php ENDPATH**/ ?>