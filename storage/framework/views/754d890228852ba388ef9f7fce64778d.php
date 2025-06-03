<article class="media">
    <div class="media-content">
        <div class="content">
            <a class="is-size-5" href="<?php echo e(route('posts.show', $post)); ?>">
                <?php echo e($post->title); ?>

            </a>
            <br>
            <div class="is-size-7">
                <?php echo $post->excerpt; ?>

            </div>
        </div>
    </div>
</article>
<?php /**PATH /var/www/resources/views/components/post/list-item.blade.php ENDPATH**/ ?>