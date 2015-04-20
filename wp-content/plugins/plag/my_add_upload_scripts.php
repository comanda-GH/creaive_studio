<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 15.12.14
 * Time: 20:02
 */
if(!class_exists('my_add_upload_scripts')) {
    class my_add_upload_scripts
    {
        function my_add_upload_scripts()
        {
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
            wp_register_script(
                'my-upload-script'
                /* Подключаем JS-код задающий поведение
                 * загрузчика и указывающий, куда вставлять
                 * ссылку после загрузки изображения
                 * Его код будет приведен ниже.
                 */
        ,plugins_url('arzamath_17th').'/js/upload.js'
                /* Указываем скрипты, от которых
                 * зависит наш JS-код
                 */
                , array('jquery', 'media-upload', 'thickbox')
            );
            wp_enqueue_script('my-upload-script');
        }

// Запускаем функцию подключения загрузчика


    }
    add_action('admin_print_scripts', 'my_add_upload_scripts');
}