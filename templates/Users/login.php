<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div >
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <!-- in /templates/Users/login.php -->
        <div class="col-12 col-md-6 order-md-2">
            <div class="users form content">
                <?= $this->Flash->render() ?>
                <div class="col-12 text-center">
                    <h3 style="font-size: 30px; font-weight: bold;">Login</h3>
                </div>
                <?= $this->Form->create() ?>
                <fieldset>
                    <?= $this->Form->control('email', ['required' => true]) ?>
                    <?= $this->Form->control('password', ['required' => true]) ?>
                </fieldset>
                <div class="d-flex justify-content-center">
                    <?= $this->Html->link(__('Signup'), ['controller' => 'Users', 'action' => 'signup'], ['class' => 'button mr-3']) ?>
                    <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block order-md-1">
            <!-- Add a placeholder for content on the side -->
            <!-- You can add any content you want here -->
        </div>
    </div>
</div>
