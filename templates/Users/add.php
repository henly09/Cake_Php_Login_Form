<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="side-drawer">
        <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                <button onclick="toggleDrawer()">Toggle Drawer</button>
        </div>
    </div>
    <!-- <button onclick="toggleDrawer()">Toggle Drawer</button> -->
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<style>
    .side-drawer {
        position: fixed;
        top: 0;
        left: -300px; /* Position off-screen to the left */
        width: 300px;
        height: 100%;
        background-color: #f0f0f0;
        transition: left 0.5s ease; /* You can add a smooth animation */
        }

        .side-drawer.open {
        left: 0; /* Show the drawer when it's open */
        }
</style>

<script>
function openDrawer() {
  const drawer = document.querySelector('.side-drawer');
  drawer.classList.add('open');
}

function closeDrawer() {
  const drawer = document.querySelector('.side-drawer');
  drawer.classList.remove('open');
}

function toggleDrawer() {
    const drawer = document.querySelector('.side-drawer');
    if (drawer.classList.contains('open')) {
        closeDrawer();
    } else {
        openDrawer();
    }
}
</script>