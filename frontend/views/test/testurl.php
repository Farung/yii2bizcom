<?php
$url1=yii::$app->urlManager->createAbsoluteUrl ("test/index");

?>

<a href="<?=$url1?>"> ไปหน้า index</a>
<br>


<?php
$url2=yii::$app->urlManager->createAbsoluteUrl (["test/test3",'sname'=>"farung",'fname'=>"saart"]);

?>

<a href="<?=$url2?>"> ไปหน้า index</a>