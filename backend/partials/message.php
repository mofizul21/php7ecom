<?php if (!empty($messages)) { ?>
    <p class="alert alert-<?= array_key_exists('success', $messages) ? 'success' : 'warning'; ?>">
        <?= $messages['success'] ?? $messages['warning']; ?>
    </p>
<?php } ?>