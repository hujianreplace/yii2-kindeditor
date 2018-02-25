<?php
namespace coldfox\kindeditor;

use yii\web\AssetBundle;

class KindEditorAsset extends AssetBundle {

    public $js=[
        'kindeditor-all.js',
        'lang/zh-CN.js',
    ];

    public $css=[
        'themes/default/default.css'
    ];
    
    public $jsOptions=[
        'charset'=>'utf8',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR.'assets' ;
    }
}

?>
