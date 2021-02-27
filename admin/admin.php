<h1 class="alebooking_title"><?php esc_html_e('Booking Settings','alebooking'); ?></h1>
<?php settings_errors(); ?>
<div class="alebooking_content">
    <form method="post" action="options.php">
        <?php 
            settings_fields('booking_settings');
            do_settings_sections('alebooking_settings');
            submit_button();
        ?>
    </form>
</div>