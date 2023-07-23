<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Sign Up') ?></legend>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone1" class="form-label mt-4">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputPhone1" placeholder="Enter Phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </fieldset>
            <?= $this->Form->button(__('Signup'), ['class'=> 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
