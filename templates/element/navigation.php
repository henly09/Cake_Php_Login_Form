 <!-- Side Drawer -->
 <div class="side-drawer bg-dark">
        <div class="side-nav h-88 overflow-auto">
        <div class="text-center mt-5">
            <figure>
                <img src="<?= $this->Url->image('/img/dummy_Image.jpg', ['fullBase' => true]) ?>" class="rounded-circle" alt="Profile Picture" width="80" height="80">
                <figcaption class="text-white mt-3">
                <?php
                        $loggedInEmail = $this->Identity->get('email');
                        echo $loggedInEmail ? $loggedInEmail : '';
                        ?>
                </figcaption>
            </figure>
        </div>
                <div class="mt-5 ml-3">
                    <div class="bg-dark" id="headingOne">
                        <h6 class="mb-3 text-white font-weight-bold ">
                            <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                            <?= __('Billing') ?>
                            </a>
                        </h6>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                    </div>
                </div>
                <div class="mt-5 ml-3">
                    <div class="bg-dark" id="headingOne">
                        <h6 class="mb-3 text-white font-weight-bold ">
                            <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2">
                            <?= __('Billing') ?>
                            </a>
                        </h6>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample2">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample2">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample2">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                    </div>
                </div>
                <div class="mt-5 ml-3">
                    <div class="bg-dark" id="headingOne">
                        <h6 class="mb-3 text-white font-weight-bold ">
                            <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3">
                            <?= __('Billing') ?>
                            </a>
                        </h6>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample3">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample3">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                        <div class="collapse pt-2 pb-2 pl-5 hoverList" id="collapseExample3">
                            <h7>
                                <?= $this->Html->link(__('Index'), ['controller' => 'Billing','action' => 'index'], ['class' => 'side-nav-item', 'style' => 'text-decoration: none;']) ?>
                            </h7>
                        </div>
                    </div>
                </div>
        </div>
        <div class="position-absolute fixed-bottom w-100 bg-light p-3 text-center">
        <p>This is the footer content for your side nav.</p>
    </div>
</div>
  <!-- Top Navigation -->
  <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>Auth</a>
        </div>
        <div class="top-nav-links">
            <div class="dropdown" id="logoutDropdown">
                <button role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                        $loggedInEmail = $this->Identity->get('email');
                        echo $loggedInEmail ? 'Logged In: ' . $loggedInEmail : '';
                        ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <?= $this->Html->link(
                            'Change Password',
                            ['controller' => 'Users', 'action' => 'edit', $this->Identity->get('id')],
                            ['class' => 'dropdown-item']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link(
                            'Account Information',
                            ['controller' => 'Users', 'action' => 'view', $this->Identity->get('id')],
                            ['class' => 'dropdown-item']); ?>
                    </li>
                    <li>
                        <?= $this->Form->postLink(
                            'Logout',
                            ['controller' => 'Users', 'action' => 'logout'],
                            ['class' => 'dropdown-item']
                        ); ?>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <style>

      /* Custom CSS */

      .hoverList:hover{
        background-color: #e6e6e6;
        transition: background-color 0.5s ease;
        border-radius: 5px;
      }

      .collapsible-header {
        cursor: pointer;
      }

      .collapsible-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
      }


      .side-drawer {
        height: 100%;
        position: fixed;
        width: 250px;
      }

      .side-nav {
        height: calc(100% - 80px); /* Set the side nav height to 100% minus the footer's height */
        overflow-y: auto; /* Enable vertical scrolling */
      }

      /* Style for the top navigation */
      .top-nav {
        position: fixed;
        top:0;
        right:0;
        left: 250px;
        height: 60px; /* Set the height of the top navigation */
        background-color: #f2f2f2;
        z-index: 1000; /* Ensure the top navigation appears above other content */
        width: calc(100% - 250px);  /* Set the width of the top navigation using calc() */
      }
      /* Dropdown Styles */
      .dropdown {
        position: relative; /* Ensure the dropdown menu is positioned relative to the parent */
      }

      .dropdown-menu {
        position: absolute;
        top: 100%; /* Position the dropdown menu below the toggle button */
        left: 0;
        right: 0; /* Stretch the width to match the parent container */
        min-width: 100%; /* Ensure the dropdown menu takes at least the width of its parent container */
        margin: 0;
        padding: 5px 0px 0px 0px;
        list-style: none;
        z-index: 1000; /* Ensure the dropdown menu appears above other content */
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        transition: 0.3s ease;
      }

      .dropdown-item {
        width: 95%;
        padding: 10px;
        font-weight: 400;
        color: #212529;
        background-color: transparent;
        transition: background-color 0.3s ease;
        border-radius: 4px
      }

      .dropdown-item:hover {
        width: 95%;
        color: #fff;
        background-color: #ff484d;
      }

</style>
