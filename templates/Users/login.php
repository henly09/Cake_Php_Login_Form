<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <div class="column-responsive column-80">
        <!-- in /templates/Users/login.php -->
        <div class="users form content" style="width: 50%; margin: 0 auto;">
            <?= $this->Flash->render() ?>
            <div style="text-align: center;">
                <h3 style="font-size: 30px; font-weight: bold;">Login</h3>
            </div>
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>
            <div style="display: flex; justify-content: center;">
                <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary', 'style' => 'margin-right: 10px;']) ?>
                <?= $this->Html->link(__('Signup'), ['controller' => 'Users', 'action' => 'signup'], ['class' => 'button']) ?>
            </div>
                <?= $this->Form->end() ?>
                
        </div>
    </div>
