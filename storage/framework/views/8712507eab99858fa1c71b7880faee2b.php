<?php if($task['priority'] > 1): ?>
    <span class="tag has-text-weight-bold
        <?php switch($task['priority']):
            case (2): ?> is-primary <?php break; ?>
            <?php case (3): ?> is-warning <?php break; ?>
            <?php case (4): ?> is-danger <?php break; ?>
        <?php endswitch; ?>
    ">
        <?php switch($task['priority']):
            case (2): ?> Moderate <?php break; ?>
            <?php case (3): ?> Urgent <?php break; ?>
            <?php case (4): ?> Critical! <?php break; ?>
        <?php endswitch; ?>
    </span>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/components/task/priority-tag.blade.php ENDPATH**/ ?>