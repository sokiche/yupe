<?php

/**
 *
 * Файл конфигурации модуля
 *
 * @category YupeMigration
 * @package  yupe.modules.install
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD https://raw.github.com/yupe/yupe/master/LICENSE
 * @link     http://yupe.ru
 **/

return array(
    'module'    => array(
        'class' => 'application.modules.mail.MailModule',
    ),
    'import'    => array(
        'application.modules.mail.models.*',
    ),
    'component' => array(
        // компонент для отправки почты
        'mail' => array(
            'class' => 'application.modules.mail.components.YMail',
        ),
        'mailMessage' => array(
            'class' => 'application.modules.mail.components.YMailMessage'
        ),
    ),
    'rules'     => array(),
);