<nav class="navbar is-primary has-text-white" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            
            <?php echo e($brand); ?>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            
            <div class="navbar-start">
                <?php echo e($slot); ?>

            </div>

            
            <?php if(isset($end)): ?>
            <div class="navbar-end">
                <?php echo e($end); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });
    </script>
</nav>
<?php /**PATH /var/www/resources/views/components/ui/navbar.blade.php ENDPATH**/ ?>