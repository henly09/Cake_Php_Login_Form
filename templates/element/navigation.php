 <!-- Side Drawer -->
 <div class="side-drawer">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
  <!-- Top Navigation -->
  <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>Auth</a>
        </div>
        <div class="top-nav-links">
            <div class="dropdown" id="logoutDropdown">
                <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear-fill">
                        <?php
                        $loggedInEmail = $this->Identity->get('email');
                        echo $loggedInEmail ? 'Logged In: ' . $loggedInEmail : '';
                        ?>
                    </i> <!-- You can use any gear icon or other icon you prefer -->
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                        <?= $this->Form->postLink(
                            'Logout',
                            ['controller' => 'Users', 'action' => 'logout'],
                            ['class' => 'dropdown-item']
                        ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
.side-drawer {
  position: fixed;
  top: 0;
  left: 0;
  width: 250px; /* Set the width of the side drawer */
  height: 100%;
  background-color: #f0f0f0;
  z-index: 1000; /* Ensure the side drawer appears above other content */
  padding: 15px;
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
  padding: 0;
  list-style: none;
  z-index: 1000; /* Ensure the dropdown menu appears above other content */
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}

.dropdown-item {
  display: block;
  width: 95%;
  padding: 5px;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  transition: background-color 0.3s ease;
}

.dropdown-item:hover {
  color: #fff;
  background-color: #ff0000;
}

    </style>

<script>
        $(document).ready(function () {
            // Toggle dropdown on click
            $('.top-nav-links').on('click', function () {
                $('#logoutDropdown').toggleClass('show');
            });
        });
    </script>
