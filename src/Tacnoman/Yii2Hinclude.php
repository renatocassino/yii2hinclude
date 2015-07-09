<?php

namespace Tacnoman;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;

/*
	Yii2Hinclude::begin(['url'=>['/url']]);
    	echo 'Loaging.....';
    Yii2Hinclude::end();
 */
class Yii2Hinclude extends Widget
{
	public $url;

	public function init()
	{
		Yii2HincludeAsset::register($this->getView());

		echo '<hx:include src="' . Url::toRoute($this->url) . '">';
	}

	public function run()
	{
		echo '</hx>';
	}
}
