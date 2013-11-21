<div class="nav-collapse collapse">
    <ul class="nav">
        <li class="active"><a href="<?php echo $this->webroot; ?>">Home</a></li>
        <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot; ?>about">About</a></li>
                <li><a href="<?php echo $this->webroot; ?>privacy">privacy</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $this->webroot; ?>contact">Contact</a></li>
        <li><a href="<?php echo $this->webroot; ?>advertisements/advertise">Advertise</a></li>
        <?php if ($access->isLoggedin()) { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Control Panel <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->webroot; ?>users">Users</a></li>
                    <li><a href="<?php echo $this->webroot; ?>roles">Roles</a></li>
                    <li><a href="<?php echo $this->webroot; ?>permissions">Permissions</a></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
    <ul class="nav pull-right">
        <?php if (!$access->isLoggedin()) { ?>
            <li><a href="<?php echo $this->webroot; ?>account/login">Sign In</a></li>
            <li><a href="<?php echo $this->webroot; ?>account/register">Register</a></li>
        <?php } else { ?>
            <li><a href="<?php echo $this->webroot; ?>account/">My Profile</a></li>
            <li><a href="<?php echo $this->webroot; ?>account/logout">Logout</a></li>
        <?php } ?>
    </ul>
</div><!--/.nav-collapse -->