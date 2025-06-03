<a href="<?php echo e(route($route)); ?>"
   class="navbar-item <?php echo e(Request::routeIs($route) ? "is-active" : ""); ?>">
    <?php echo e($slot); ?>

</a>
<?php /**PATH /var/www/resources/views/components/ui/navbar-item.blade.php ENDPATH**/ ?>