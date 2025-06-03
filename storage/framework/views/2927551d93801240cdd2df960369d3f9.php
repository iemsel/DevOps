<?php if(session('status')): ?> 
<div class="notification is-success">
    <button class="delete"></button>
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<?php if(session('info')): ?>
    <div class="notification is-info">
        <button class="delete"></button>
        <?php echo e(session('info')); ?>

    </div>
<?php endif; ?>
<?php if(session('success')): ?>
    <div class="notification is-success">
        <button class="delete"></button>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(session('warning')): ?>
    <div class="notification is-warning">
        <button class="delete"></button>
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>
<?php if(session('danger')): ?>
    <div class="notification is-danger">
        <button class="delete"></button>
        <?php echo e(session('danger')); ?>

    </div>
<?php endif; ?>


<?php $__env->startPush('scripts'); ?>
    <script type="application/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/resources/views/components/ui/notifications.blade.php ENDPATH**/ ?>