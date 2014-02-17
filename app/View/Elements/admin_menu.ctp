<a class="advertise" target="_new"href="<?php echo $this->webroot; ?>permissions">PERMISSIONS</a>
<?php
$act = $this->params['action'];
$cont = $this->params['controller'];
?>


<div id="headerWrap">
    <div id="header">
        <div id="logo"><a href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot; ?>images/logo.png"/></a></div>
        <div id="head-right">
            <ul id="topNav">
                <li class="<?php echo $act == 'index_home' ? ' current' : ''; ?>">
                    <a class="home" href="<?php echo $this->webroot; ?>admin/home">HOME</a>
                </li>

                <li class="<?php echo $act == 'admin_properties' ? ' current' : ''; ?>">
                    <a class="list"  href="<?php echo $this->webroot; ?>admin/properties">LISTINGS</a>
                </li>

                <li class="<?php echo $act == 'admin_users' ? ' current' : ''; ?>">
                    <a class="member" href="<?php echo $this->webroot; ?>admin/users">USERS</a>
                </li>

                <li class="<?php echo $act == 'admin_pages' ? ' current' : ''; ?>">
                    <a class="about"  href="<?php echo $this->webroot; ?>admin/pages">PAGES</a>
                </li>

                <li class="<?php echo $act == 'admin_settings' ? ' current' : ''; ?>">
                    <a class="advertise"  href="<?php echo $this->webroot; ?>admin/settings">SETTINGS</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div><!--end of headerWrap-->