<?php

ob_start();
?>
<div class="row mt-5" style="margin:auto">
    <div class="card" style="width: 25rem; margin-left:10px">
        <div class="card-body">
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <small href="#" class="card-subtitle"><?= $post['datePost'] ?></small>
            <p class="card-text"><?= $post['content'] ?></p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();

require_once 'pages/layout.php';
