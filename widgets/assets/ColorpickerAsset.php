<?php

namespace dkhlystov\widgets\assets;

use Yii;
use yii\web\AssetBundle;

class ColorpickerAsset extends AssetBundle
{

	/**
	 * @inheritdoc
	 */
	public $sourcePath = '@bower/bootstrap-colorpicker/dist';

	/**
	 * @inheritdoc
	 */
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];

	/**
	 * @var string plugin laguage
	 */
	private static $_lang;

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		$this->css[] = 'css/bootstrap-colorpicker' . (YII_DEBUG ? '' : '.min') . '.css';
		$this->js[] = 'js/bootstrap-colorpicker' . (YII_DEBUG ? '' : '.min') . '.js';
	}

}
