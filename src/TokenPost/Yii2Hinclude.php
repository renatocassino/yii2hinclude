<?php

namespace TokenPost;

use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class Yii2Hinclude extends Widget
{
	public $sourcePath = '@vendor/tokenpost/yii2hinclude/src/Assets';

	public $js = [
		'hinclude.js',
	];

	public function init()
	{
		Yii2HincludeAsset::register($this->getView());
	}

	public function run()
	{
		
	}
}