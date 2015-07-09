Yii2Hinclude
===========================


---------------------------
This is a plugin to use <a href="http://mnot.github.io/hinclude/" target="_blank">Hinclude JS</a> in Yii2.

Hinclude adds one element to HTML; hx:include. When the browser encounters this element, it will include the document at the end of the src attribute.

```JSON
{
    "require": {
        "tacnoman/yii2hinclude": "dev-master"
    }
}
```

How to usage:
-----------

```php
use \Tacnoman\Yii2Hinclude;

Yii2Hinclude::begin(['url'=>['page','id'=>3]);
    // if you are using fontawesome
    echo '<i class="fa fa-spinner fa-spin"></i>';
Yii2Hinclude::end();
```
