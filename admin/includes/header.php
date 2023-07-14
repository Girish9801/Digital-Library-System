<!-- LOGO HEADER END-->
<nav class="navbar">
    <section class="navbar-container">
        <a href="#" class="logo">DLS: digital library system</a>

        <ul id="menu-top" class="nav navbar-nav navbar-link">
            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-link" data-toggle="dropdown">CATEGORIES <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">add</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">manage</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-link" data-toggle="dropdown">AUTHORS <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">add</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">manage</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-link" data-toggle="dropdown">BOOKS <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">add</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">manage</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-link" data-toggle="dropdown">ISSUE BOOKS <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">new book</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">manage issued</a></li>
                </ul>
            </li>

            <li><a href="reg-students.php">REG STUDENTS</a></li>
            <li><a href="change-password.php">CHANGE PASSWORD</a></li>
            <li><a href="logout.php" class="logout">LOG ME OUT</a></li>
        </ul>
    </section>
</nav>