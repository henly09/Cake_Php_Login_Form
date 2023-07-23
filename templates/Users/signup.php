<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <div class="column-responsive column-80">
        <div class="users form content" style="width: 70%; margin: 0 auto;>
            <?= $this->Form->create($user) ?>
            <fieldset>
            <div style="text-align: center;">
                <legend style="font-size: 30px; font-weight: bold;"><?= __('Sign Up') ?></legend>
            </div>
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('phone', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>
            <?= $this->Form->button(__('Signup'), ['class'=> 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

