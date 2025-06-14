<?php if($task['completed_at']): ?>
    <span class="has-text-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor" opacity=".3"
                d="M5 19h14V5H5v14zm2.41-7.4l2.58 2.58l6.59-6.59L17.99 9l-8 8L6 13.01l1.41-1.41z"/>
          <path fill="currentColor"
                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM17.99 9l-1.41-1.42l-6.59 6.59l-2.58-2.57l-1.42 1.41l4 3.99z"/>
        </svg>
    </span>
<?php else: ?>
    <i class="fa-regular fa-circle-check"></i>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/components/task/state-icon.blade.php ENDPATH**/ ?>