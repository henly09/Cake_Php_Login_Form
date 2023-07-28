 <!-- Side Drawer -->
 <div class="side-drawer bg-dark p-3">
        <div class="side-nav">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h4 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                <?= __('Actions') ?>
                            </a>
                        </h4>
                        <div class="collapse pt-3 pb-3 pl-5" id="collapseExample">
                            <h6>
                                <?= $this->Html->link(__('Billings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                            </h6>
                        </div>
                    </div>
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

.collapsible-header {
  cursor: pointer;
}

.collapsible-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
}

.side-drawer {
  position: fixed;
  top: 0;
  left: 0;
  width: 250px; /* Set the width of the side drawer */
  height: 100%;
  z-index: 1000; /* Ensure the side drawer appears above other content */
  transition: width 0.3s ease; /* Add smooth transition for side drawer animation */
}

/* Style for the top navigation */
.top-nav {
  position: fixed;
  top: 0;
  left: 250px; /* Adjust this value to match the width of the side drawer */
  right: 0;
  height: 60px; /* Set the height of the top navigation */
  background-color: #f2f2f2;
  z-index: 1000; /* Ensure the top navigation appears above other content */
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 15px;
  /* Set the width of the top navigation using calc() */
  width: calc(100% - 250px);
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
  display: block;
  width: 95%;
  padding: 10px;
  clear: both;
  font-weight: 400;
  color: #212529;
  background-color: transparent;
  transition: background-color 0.3s ease;
  border-radius: 4px;
}

.dropdown-item:hover {
  width: 95%;
  color: #fff;
  background-color: #ff484d;
}

</style>
