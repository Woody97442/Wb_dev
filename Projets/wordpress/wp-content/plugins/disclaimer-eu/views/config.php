<div class="wrap">
    <h1>Réglages de Disclaimer Eu</h1>
    <form action="options.php" method="post">
        <?php settings_fields('disclaimer_eu_general'); ?>
        <?php do_settings_sections('disclaimer_settings'); ?>
        <?php submit_button(); ?>

    </form>
</div>