<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset049 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
        'template/vendor/bootstrap/css/bootstrap.min.css',
        'template/vendor/bootstrap-icons/bootstrap-icons.css',
        'template/vendor/boxicons/css/boxicons.min.css',
        'template/vendor/glightbox/css/glightbox.min.css',
        'template/vendor/remixicon/remixicon.css',
        'template/vendor/swiper/swiper-bundle.min.css',
        'template/css/style.css',
    ];
    public $js = [
        'vendor/purecounter/purecounter_vanilla.js',
        'template/vendor/aos/aos.js',
        'template/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'template/vendor/glightbox/js/glightbox.min.js',
        'template/vendor/isotope-layout/isotope.pkgd.min.js',
        'template/vendor/swiper/swiper-bundle.min.js',
        'template/vendor/php-email-form/validate.js',
        'template/js/main.js'
    ];
}
