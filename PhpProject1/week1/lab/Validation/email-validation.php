
<?php if(isPostRequest()): ?>
        <?php if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false ): ?>
            <h2 class="emailcheck">Email is valid</h2>
        <?php else: ?>
            <h2 class="emailcheck">Email is NOT valid</h2>
        <?php endif; ?>        
<?php endif;?>
