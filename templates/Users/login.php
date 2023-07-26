<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="column-responsive column-80 d-flex align-items-center justify-content-center" style="height: 100vh;">
    <!-- in /templates/Users/login.php -->
    <div class="users form content col-7">
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
