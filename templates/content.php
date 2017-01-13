<?php $this->layout('theme::layout/05_page') ?>
<article>
    <h1 style="margin: 0;">
        <?php
        if ($page['breadcrumbs']) {
            echo '<ol class="breadcrumb">';
            foreach ($page['breadcrumb_trail'] as $key => $value) {
                echo '<li><a href="' . $base_page . $value . '">' . $key . '</a></li>';
            }
            echo '<li class="active">'.$page['title'].'</li>';
            echo '</ol>';
        } else {
            echo $page['title'];
        }
        ?>
    </h1>

    <?php if(empty($page['content'])) {
        echo "This is just a placeholder.";
    } else {
        echo $page['content'];
    } ?>

    <hr/>

    <p>If you have something to add pls make a PR in the documentation repository: <a href="https://github.com/Astrotomic/notifynder-documentation">https://github.com/Astrotomic/notifynder-documentation</a></p>

    <?php if(!empty($page['prev']) || !empty($page['next'])) { ?>
    <nav>
        <ul class="pager">
            <?php if(!empty($page['prev'])) { ?><li><a href="<?= $base_url . $page['prev']->getUrl() ?>">Previous</a></li><?php } ?>
            <?php if(!empty($page['next'])) { ?><li><a href="<?= $base_url . $page['next']->getUrl() ?>">Next</a></li><?php } ?>
        </ul>
    </nav>
    <?php } ?>
</article>

