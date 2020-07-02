<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
//            ['label' => 'Обратная связь', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                    ['label' => 'Войти', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Выйти (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    ),
                ],
            ]);
            ?>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Меню модуля', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => Yii::t('translate', 'Customers'), 'url' => ['/customer']],
                    ['label' => Yii::t('translate', 'Employees'), 'url' => ['/employee']],
                    ['label' => Yii::t('translate', 'Orders'), 'url' => ['/order']],
                    ['label' => Yii::t('translate', 'P Categories'), 'url' => ['/p-category']],
                    ['label' => Yii::t('translate', 'Products'), 'url' => ['/product']],
                    ['label' => Yii::t('translate', 'S Categories'), 'url' => ['/s-category']],
                    ['label' => Yii::t('translate', 'Services'), 'url' => ['/services']],
                    ['label' => Yii::t('translate', 'Sales'), 'url' => ['/sales']],
                    ['label' => Yii::t('translate', 'Analyses'), 'url' => ['/analyse']],



//                    ['label' => 'Войти', 'url' => ['/site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
