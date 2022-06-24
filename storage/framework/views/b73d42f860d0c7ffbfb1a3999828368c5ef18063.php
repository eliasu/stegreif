<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Default Mailer')); ?></th>
    <td><code><?php echo e(config('mail.default')); ?></code></td>
</tr>
<?php if(config('mail.default') == 'smtp'): ?>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Host')); ?></th>
    <td><code><?php echo e(config('mail.mailers.smtp.host')); ?></code></td>
</tr>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Port')); ?></th>
    <td><code><?php echo e(config('mail.mailers.smtp.port')); ?></code></td>
</tr>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Encryption')); ?></th>
    <td>
        <?php if(config('mail.mailers.smtp.encryption')): ?>
            <code><?php echo e(config('mail.mailers.smtp.encryption')); ?></code>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Username')); ?></th>
    <td>
        <?php if(config('mail.mailers.smtp.username')): ?>
            <code><?php echo e(config('mail.mailers.smtp.username')); ?></code>
        <?php endif; ?>
    </td>
</tr>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Password')); ?></th>
    <td>
        <?php if(config('mail.mailers.smtp.password')): ?>
            <code><?php echo e(config('mail.mailers.smtp.password')); ?></code>
        <?php endif; ?>
    </td>
</tr>
<?php endif; ?>
<?php if(config('mail.default') == 'sendmail'): ?>
<tr>
    <th class="pl-2 py-1 w-1/4"><?php echo e(__('Sendmail')); ?></th>
    <td><code><?php echo e(config('mail.mailers.sendmail.path')); ?></code></td>
</tr>
<?php endif; ?>
<?php /**PATH /Users/elias/Sites/Github/stegreif/vendor/statamic/cms/src/Providers/../../resources/views/utilities/partials/email-l7.blade.php ENDPATH**/ ?>