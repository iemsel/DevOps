<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskITEasy</title>

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

<?php if (isset($component)) { $__componentOriginala02bf2c07d7e78a7e7f116823e74edbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('brand', null, []); ?> 
        <a href="/" class="navbar-item">
            <i class="fa-solid fa-list-check"></i>&nbsp;TaskITEasy
        </a>
     <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalaa0bf023601f3ffefcb2af915ee13132 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa0bf023601f3ffefcb2af915ee13132 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.navbar-item','data' => ['route' => $navItem['route']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.navbar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navItem['route'])]); ?><?php echo e($navItem['title']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa0bf023601f3ffefcb2af915ee13132)): ?>
<?php $attributes = $__attributesOriginalaa0bf023601f3ffefcb2af915ee13132; ?>
<?php unset($__attributesOriginalaa0bf023601f3ffefcb2af915ee13132); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa0bf023601f3ffefcb2af915ee13132)): ?>
<?php $component = $__componentOriginalaa0bf023601f3ffefcb2af915ee13132; ?>
<?php unset($__componentOriginalaa0bf023601f3ffefcb2af915ee13132); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd)): ?>
<?php $attributes = $__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd; ?>
<?php unset($__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala02bf2c07d7e78a7e7f116823e74edbd)): ?>
<?php $component = $__componentOriginala02bf2c07d7e78a7e7f116823e74edbd; ?>
<?php unset($__componentOriginala02bf2c07d7e78a7e7f116823e74edbd); ?>
<?php endif; ?>


<section class="section">
    <div class="container">
        
        <a class="button is-primary mb-3" href="<?php echo e(url()->previous()); ?>">Back</a>
        <?php if (isset($component)) { $__componentOriginal869f42401e5d096608b31910c52b2235 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal869f42401e5d096608b31910c52b2235 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.notifications','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal869f42401e5d096608b31910c52b2235)): ?>
<?php $attributes = $__attributesOriginal869f42401e5d096608b31910c52b2235; ?>
<?php unset($__attributesOriginal869f42401e5d096608b31910c52b2235); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal869f42401e5d096608b31910c52b2235)): ?>
<?php $component = $__componentOriginal869f42401e5d096608b31910c52b2235; ?>
<?php unset($__componentOriginal869f42401e5d096608b31910c52b2235); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>TaskITEasy</p>
        </div>
    </div>
</footer>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/components/layout/main.blade.php ENDPATH**/ ?>