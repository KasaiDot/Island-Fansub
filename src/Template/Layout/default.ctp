<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('font-awesome.min') ?>

    <?= $this->Less->less('less/styles.less'); ?>
</head>
<body>
<nav id="top-menu" class="navbar navbar-default no-margin">
    <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <i class="fa fa-th-large" aria-hidden="true"></i>
        </button>
        <?= $this->Html->link('iLAND-FANSUB.TV', ['controller' => 'pages', 'action' => 'home'], ['class' => 'navbar-brand']); ?>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                    <i class="fa fa-th-large" aria-hidden="true"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>
<div id="wrapper">
    <?= $this->cell('Sidebar::all'); ?>
    <div id="content-wrapper">
        <div class="container-fluid xyz">

        </div>

    </div>
</div>
<?= $this->Html->script('jquery-2.1.4.min'); ?>
<?= $this->Html->script('sidebar'); ?>
<?= $this->fetch('script') ?>
</body>
</html>
