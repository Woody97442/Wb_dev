<?php

namespace Woody\DisclaimerEu\Controller;

use Woody\DisclaimerEu\DisclaimerEuPlugin;

class AdminController
{
    const REDIRECT_TO_EXIT = 0;
    const REDIRECT_TO_HOME = 1;

    public function __construct()
    {
        $this->init_hooks();
    }

    public function init_hooks()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
        add_action('admin_init', [$this, 'admin_init']);
    }

    public function admin_menu()
    {
        add_options_page('DisclaimerEu', 'DisclaimerEu', 'manage_options', 'disclaimer_settings', [$this, 'config_page']);
    }

    public function config_page()
    {
        DisclaimerEuPlugin::render('config');
    }

    public function admin_init()
    {
        register_setting('disclaimer_eu_general', 'disclaimer_eu_general');
        add_settings_section('disclaimer_eu_main', null, null, 'disclaimer_settings');
        add_settings_field('redirect_to', 'Rediriger vers après avoir click sur "Ok"', [$this, 'redirect_to_render'], 'disclaimer_settings', 'disclaimer_eu_main');
    }

    public function redirect_to_render()
    {
        $general_options = get_option('disclaimer_eu_general', [
            'redirect_to' => 0,
        ]);
        
        $selected_value = $general_options['redirect_to'];
?>
        <select name="disclaimer_eu_general[redirect_to]">
            <option value="<?= self::REDIRECT_TO_EXIT ?>" <?= selected(self::REDIRECT_TO_EXIT, $selected_value) ?> >Si moins de 18 ans sortis du site</option>
            <option value="<?= self::REDIRECT_TO_HOME ?>" <?= selected(self::REDIRECT_TO_HOME, $selected_value) ?> >Si plus de 18 ans page d'accueil du site</option>
        </select>
<?php
    }
}
