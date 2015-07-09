<?php

namespace Tacnoman;

use yii\web\AssetBundle;

class Yii2HincludeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/tokenpost/yii2hinclude/src/Assets';

	public $js = [
		'hinclude.js',
	];
}
