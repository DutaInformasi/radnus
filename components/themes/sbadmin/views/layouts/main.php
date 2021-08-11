<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\themes\sbadmin\SbAdmin;
use app\components\themes\sbadmin\widgets\Alert;
use mdm\admin\components\Helper;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

if (Yii::$app->controller->action->id === 'login' || Yii::$app->controller->action->id === 'request-password-reset' || Yii::$app->controller->action->id === 'resend-verification-email') {
    echo $this->render('main-login', [
        'content' => $content
    ]);
} else {
    //AppAsset::register($this);
    SbAdmin::register($this);
?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body id="page-top">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <?php
            $login = Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>');

            $items = [
                ['label' => 'Dashboard', 'url' => ['/site/index']],
                ['label' => 'Router', 'url' => ['/nas/index']],
                ['label' => 'Accounting', 'url' => ['/accounting/index']],
                ['label' => 'Profile', 'url' => ['/group/index']],
                ['label' => 'User', 'url' => ['/account/index']],
                //['label' => 'Group User', 'url' => ['/group-user/index']],
                //$login
                Yii::$app->user->isGuest ?
                    ['label' => 'Logout', 'url' => ['/site/login']] :
                    [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ],
            ];

            NavBar::begin([
                'brandLabel' => 'RADNUS',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => ['navbar-dark', 'bg-dark', 'navbar-expand-md']
                ]
            ]);

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right navbar-fluid'],
                'items' => Helper::filter($items),
            ]);
            NavBar::end();
            ?>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 10px;">
                            <!--?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?-->
                            <h1 class="h3 mb-0 text-gray-800"><?= $this->title ?></h1>
                        </div>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container">
            <p>&copy; <?= Html::a('Duta Informasi '.date('Y'), 'https://dutainformasi.net', ['target' => '_blank']) ?></p>
        </footer>

        <?php $this->endBody() ?>
    </body>

    </html>
    <?php $this->endPage() ?>

<?php } ?>