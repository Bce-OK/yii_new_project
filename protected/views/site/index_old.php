<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Добро пожаловать на <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Поздравляем! Вы успешно установили приложение Yii.</p>

<p>Вы можете изменить контент этой страницы  модифицировав эти 2 файла:</p>
<ul>
	<li>Файл вида: <code><?php echo __FILE__; ?></code></li>
	<li>Файл шаблона: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Для более детальной информации о том как разрабатывать это приложение пожалуйста прочитайте
<a href="http://www.yiiframework.com/doc/">документацию</a>.
Вопросы задавайте на <a href="http://www.yiiframework.com/forum/">форуме</a>,
вы можете задавать любые вопросы.</p>
