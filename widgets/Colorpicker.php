<?php

namespace dkhlystov\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

use dkhlystov\widgets\assets\ColorpickerAsset;

class Colorpicker extends InputWidget
{

	/**
	 * @var array additional options for jquery bootstrap colorpicker widget
	 */
	public $clientOptions = [];

	/**
	 * @inheritdoc
	 */
	public $options = ['class' => 'form-control'];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		if (empty($this->options['id']))
			$this->options['id'] = $this->id;

		$this->registerClientScripts();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		echo Html::activeTextInput($this->model, $this->attribute, $this->options);
	}

	/**
	 * Registration client scripts and initializing plugin
	 * @return void
	 */
	private function registerClientScripts()
	{
		$view = $this->getView();

		ColorpickerAsset::register($view);

		$options = Json::htmlEncode($this->clientOptions);

		$view->registerJs("$('#{$this->options['id']}').colorpicker($.extend({}, $options));");
	}

}
