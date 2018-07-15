<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FolioAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i',
        'web/folio-master/lib/bootstrap/css/bootstrap.min.css',
        'web/folio-master/lib/ionicons/css/ionicons.min.css',
        'web/folio-master/lib/owlcarousel/assets/owl.carousel.min.css',
        'web/folio-master/lib/magnific-popup/magnific-popup.css',
        'web/folio-master/lib/hover/hover.min.css',
        'web/folio-master/css/style.css',
        'web/folio-master/css/responsive.css',
    ];
    public $js = [
        'web/folio-master/lib/jquery/jquery.min.js',
        'web/folio-master/lib/jquery/jquery-migrate.min.js',
        'web/folio-master/lib/bootstrap/js/bootstrap.bundle.min.js',
        'web/folio-master/lib/typed/typed.js',
        'web/folio-master/lib/owlcarousel/owl.carousel.min.js',
        'web/folio-master/lib/magnific-popup/magnific-popup.min.js',
        'web/folio-master/lib/isotope/isotope.pkgd.min.js',
        'web/folio-master/contactform/contactform.js',
        'web/folio-master/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
