<?php
/**
 * Created by IntelliJ IDEA.
 * User: jaco
 * Date: 2018/09/13
 * Time: 7:55 PM
 */


$this->pageTitle=Yii::app()->name . ' - TinyMCE';
$this->breadcrumbs=array(
    'TinyMCE',
);
$baseUrl = Yii::app ()->getBaseUrl ( true );

echo CHtml::textArea('editor');

/** @var CClientScript $cs */
$cs=Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/tinymce/tinymce.min.js');

Yii::app ()->getClientScript ()->registerScript ( 'init_tinymce' , ' // Tiny MCE
             tinymce.init({
                document_base_url: "'.$baseUrl.'/js/tinymce/plugins/idowsfilemanager/",
                relative_urls:true,
                selector: "textarea",
                plugins: [
                    "idowsfilemanager"
                ],
                toolbar1: "idowsfilemanager",
                 fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                image_advtab: true,
            });
            ' , CClientScript::POS_READY );

