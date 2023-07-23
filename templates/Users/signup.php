<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <div class="column-responsive column-80">
        <div class="users form content col-8 mx-auto">
            <?= $this->Form->create($user) ?>
            <fieldset>
            <div style="text-align: center;">
                <legend style="font-size: 30px; font-weight: bold;"><?= __('Sign Up') ?></legend>
            </div>
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('phone', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>
            <div style="display: flex; justify-content: center;">
                <?= $this->Html->link(__('Go Back'), $this->Url->build($this->request->referer()),['class' => 'button mr-3']) ?>
                <?= $this->Html->link(__('Signup'), ['controller' => 'Users', 'action' => 'signup'], ['class' => 'button']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>

