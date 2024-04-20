<h1>About</h1>
<?php

foreach ($models as $model) : ?>
    #<?=$model['id']?> , Name : <?= $model['name'] ?>, tel :<?= $model['tel'] ?><br>
<?php endforeach ?>