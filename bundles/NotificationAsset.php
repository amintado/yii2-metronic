<?php
/**
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace  hustshenl\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class NotificationAsset extends AssetBundle
{
    public $sourcePath = '@hustshenl/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'global/plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'hustshenl\metronic\bundles\CoreAsset',
    ];
}
