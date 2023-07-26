<!-- src/Template/Element/sidebar_navigation.ctp -->
<nav class="bg-light p-3 sidebarActions">
    <h4 class="heading toggle-btn">
        <i class="bi bi-list"></i> <!-- You can use any icon you prefer -->
        <span class="ms-2">Actions</span>
    </h4>
    <ul class="list-unstyled collapsible">
        <?php echo $this->Html->link('List Users', ['controller' => 'Users','action' => 'index'], ['class' => 'side-nav-item']); ?>
        <?php echo $this->Html->link('Add User', ['controller' => 'Users','action' => 'add'], ['class' => 'side-nav-item']); ?>
    </ul>
</nav>
<nav class="bg-light p-3 sidebarActions2">
    <h4 class="heading toggle-btn2">
        <i class="bi bi-list"></i> <!-- You can use any icon you prefer -->
        <span class="ms-2">Actions</span>
    </h4>
    <ul class="list-unstyled collapsible">
        <?php echo $this->Html->link('List Users', ['controller' => 'Users','action' => 'index'], ['class' => 'side-nav-item']); ?>
        <?php echo $this->Html->link('Add User', ['controller' => 'Users','action' => 'add'], ['class' => 'side-nav-item']); ?>
    </ul>
</nav>


<script>
        $(document).ready(function () {
            // Toggle collapsible menu on click
            $('.toggle-btn').click(function () {
                $('.sidebarActions').toggleClass('expanded');
            });
            $('.toggle-btn2').click(function () {
                $('.sidebarActions2').toggleClass('expanded');
            });

        });
    </script>

     <!-- Your head content goes here -->
     <style>
        .sidebar {
            width: 200px;
            background-color: #f2f2f2;
            padding: 15px;
            transition: width 0.3s ease; /* Add smooth transition for width change */
        }

        /* Custom CSS to hide the collapsible menu items by default */
        .collapsible {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.3s ease, max-height 0.3s ease; /* Add smooth transition for opacity and max-height change */
        }

        /* Custom CSS to show the collapsible menu items when expanded */
        .expanded .collapsible {
            opacity: 1;
            max-height: 500px; /* Update this value to a larger number or "none" based on your content height */
        }
    </style>