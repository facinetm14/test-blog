<?php
ob_start();
?>
<div class="row mt-5" style="margin:auto">
    <?php foreach ($posts as $post) :?>
        <div class="card" style="width: 18rem; margin-left:10px">
            <div class="card-body">
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <small href="#" class="card-subtitle"><?= $post['datePost'] ?></small>
                <p class="card-text"><?= substr($post['content'],0, strlen($post['content'])/2).'...' ?></p>
                <a class="card-link" href="index?url=details&&id=<?=$post['id']?>">details</a>
            </div>
        </div>
    <?php  endforeach?>
</div>
<?php $content = ob_get_clean();

require_once 'pages/layout.php';
