<div class="wrap">
    <h2>WP Plugin arzamath_17th</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('arzamath_17th-group'); ?>
        <?php @do_settings_fields('arzamath_17th-group'); ?>

        <?php do_settings_sections('arzamath_17th'); ?>

        <?php @submit_button(); ?>
    </form>
</div>