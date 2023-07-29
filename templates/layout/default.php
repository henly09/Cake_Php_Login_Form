<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css($this->Url->build('/css/bootstrap.css')) ?>
    <?= $this->Html->script($this->Url->build('/js/popper.js')) ?>
    <?= $this->Html->script($this->Url->build('/js/bootstrap.js')) ?>
    <?= $this->Html->script($this->Url->build('/js/jQuery.js')) ?>

    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<?php
    // Determine if the current controller is "Users" and the action is "login" or "signup"
    $isLoginOrSignupPage = (
        $this->getRequest()->getParam('controller') === 'Users' &&
        in_array($this->getRequest()->getParam('action'), ['login', 'signup','view'.'edit'])
    );
    ?>
    
    <?php if (!$isLoginOrSignupPage): ?>
        <!-- Include the navigation element only on non-login and non-signup pages -->
        <body>
        <?= $this->element('navigation'); ?>
        <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    </body>
    <?php elseif ($isLoginOrSignupPage): ?>
        <!-- Not include the navigation element only on non-login and non-signup pages -->
        <body class="container-fluid">
            <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
        </body>
    <?php endif; ?>


    <footer>
    </footer>

<style>
        .container-fluid {
            position: relative;
            background: url('/img/acc_login_bg.jpg') center center / cover no-repeat;
        }

        .container-fluid::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

</style>
</html>




