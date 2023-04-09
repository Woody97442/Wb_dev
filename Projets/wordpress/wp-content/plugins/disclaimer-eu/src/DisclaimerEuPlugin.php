<?php

namespace Woody\DisclaimerEu;

use Woody\DisclaimerEu\Controller\AdminController;

class DisclaimerEuPlugin
{
    const DISCLAIMER_EU_ACTIVATED = 'woody_disclaimer_activated';


    public function __construct(string $file)
    {
        register_activation_hook($file, [$this, 'plugin_activation']);
        add_action('admin_notices', [$this, 'notice_activation']);

        if(is_admin()){
            $adminController = new AdminController;
        }
    }

    public function plugin_activation(): void
    {
        set_transient(self::DISCLAIMER_EU_ACTIVATED, true);
    }

    public function notice_activation(): void
    {
        if(get_transient(self::DISCLAIMER_EU_ACTIVATED)){
            self::render('notice_activated', [
                'message' => "Merci d'avoir activé Disclaimer-Eu !",
            ]);
            delete_transient(self::DISCLAIMER_EU_ACTIVATED);
        }
    }

    public static function render(string $name, array $args = []): void
    {
        extract($args);

        $file = WOODY_PLUGIN_DIR . "views/$name.php";

        ob_start();

        include_once($file);

        echo ob_get_clean();
    }
}