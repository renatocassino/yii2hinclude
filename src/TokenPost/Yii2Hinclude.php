<?php

namespace TokenPost;

use yii\base\Widget;
use Yii;

class Yii2Hinclude extends Widget
{
	public $sourcePath = '@vendor/tokenpost/yii2hinclude/src/Assets';

	public $js = [
		'hinclude.js',
	];
}