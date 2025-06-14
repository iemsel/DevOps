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
    <h1 class="title is-4">About</h1>

    <h2 class="title is-5">Welcome to Our App</h2>
    <p>
        Discover our innovative app designed to transform your daily life and streamline your
        productivity. Our app is your perfect companion for task management, allowing you to
        regain control of your time and focus on what truly matters. Whether you're a busy
        professional, a student juggling classes and extracurricular activities, or simply
        looking to better organize your personal life, our app is here to help. With an
        intuitive and user-friendly interface, we've created a solution that empowers you to
        achieve your goals and dreams.
    </p>

    <h2 class="title is-5 mt-5">Key Features</h2>
    <p>
        Our app boasts a wide range of features that make it an indispensable tool for anyone
        seeking enhanced productivity. You can create and manage tasks with ease, set deadlines,
        and prioritize them according to your needs. We've also incorporated a reminder system
        that ensures you never miss an important deadline or appointment. In addition, our app
        allows for collaboration with others, making it ideal for team projects and group
        activities. With cloud synchronization, you can access your tasks from anywhere, keeping
        you on top of your game at all times.
    </p>

    <h2 class="title is-5 mt-5">Our Vision</h2>
    <p>
        At our core, we are driven by a vision of simplifying your life and enabling you to achieve
        your aspirations. We believe that effective task management can free up valuable time for
        personal growth, creativity, and enjoying life's pleasures. Our app is not just a tool but a
        partner in your journey to success. Join us as we revolutionize the way you work, study, and
        live. Together, we can make your dreams a reality, one task at a time.
    </p>
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
<?php /**PATH /var/www/resources/views/about.blade.php ENDPATH**/ ?>