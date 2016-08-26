<?php $this->layout('theme::layout/00_layout') ?>

<!-- Sidebar -->
<aside class="sidebar sidebar-boxed">

    <h1>
        <a class="sidebar-brand" href="/">
            <?php echo $params['title']; ?>
        </a>
    </h1>

    <ul class="sidenav dropable sticky">
        <?php
        if ($page['language'] !== '') {
            echo $this->get_navigation($tree->value[$page['language']], $page['language'], isset($params['request']) ? $params['request'] : '', $base_page, $params['mode']);
        } else {
            echo $this->get_navigation($tree, '', isset($params['request']) ? $params['request'] : '', $base_page, $params['mode']);
        }
        ?>

    </ul>

</aside>
<!-- END Sidebar -->

<!-- Header -->
<header class="site-header navbar-fullwidth">

    <!-- Top navbar & branding -->
    <nav class="navbar navbar-default">
        <div class="container">

            <!-- Toggle buttons and brand -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                    <span class="fa fa-dots"></span>
                </button>

                <button type="button" class="navbar-toggle for-sidebar" data-toggle="offcanvas">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- END Toggle buttons and brand -->

            <!-- Top navbar -->
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="true" role="banner">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (!empty($params['html']['links'])) {
                        foreach ($params['html']['links'] as $name => $url) {
                            echo '<li><a href="' . $url . '" target="_blank">' . $name . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- END Top navbar -->

        </div>
    </nav>
    <!-- END Top navbar & branding -->

</header>
<!-- END Header -->


<!-- Content -->
<main class="container-fluid">
    <div class="row">
        <article class="main-content" role="main">
            <?= $this->section('content'); ?>
        </article>
    </div>
</main>
<!-- END Content -->



