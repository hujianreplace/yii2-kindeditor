# yii2-kindeditor
yii2-kindeditor
composer require coldfox/yii2-kindeditor
### 用法

1. 控制器中

```
public function actions(){
     return [
         'Kupload' => [
             'class' => KindEditorAction::className()
         ]
  
     ];
 }
```

2. form表单中

```
<?= $form->field($model, 'content')->widget(coldfox\kindeditor\KindEditor::className(),[]) ?>
```

* 可配置dir属性为根上传根目录