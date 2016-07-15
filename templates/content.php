<?php $this->layout('theme::layout/05_page') ?>
<article>
    <?php if ($params['html']['date_modified']) { ?>
        <div class="page-header sub-header clearfix">
            <h1><?php
                if ($page['breadcrumbs']) {
                    echo $this->get_breadcrumb_title($page, $base_page);
                } else {
                    echo $page['title'];
                }
                ?>
            </h1>
                    <span style="float: left; font-size: 10px; color: gray;">
                        <?= date("l, F j, Y", $page['modified_time']); ?>
                    </span>
                    <span style="float: right; font-size: 10px; color: gray;">
                        <?= date("g:i A", $page['modified_time']); ?>
                    </span>
        </div>
    <?php } else { ?>
        <div class="page-header">
            <h1><?php
                if ($page['breadcrumbs']) {
                    echo $this->get_breadcrumb_title($page, $base_page);
                } else {
                    echo $page['title'];
                }
                ?>
            </h1>
        </div>
    <?php } ?>

    <?php if(empty($page['content'])) {
        echo "This is just a placeholder.";
    } else {
        echo $page['content'];
    } ?>

    <hr/>

    <p>If you have something to add pls make a PR in the docu repo: <a href="https://github.com/Notifynder/documentation">https://github.com/Notifynder/documentation</a></p>

    <?php if(!empty($page['prev']) || !empty($page['next'])) { ?>
    <nav>
        <ul class="pager">
            <?php if(!empty($page['prev'])) { ?><li><a href="<?= $base_url . $page['prev']->getUrl() ?>">Previous</a></li><?php } ?>
            <?php if(!empty($page['next'])) { ?><li><a href="<?= $base_url . $page['next']->getUrl() ?>">Next</a></li><?php } ?>
        </ul>
    </nav>
    <?php } ?>
</article>

