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

                <li class="<?php echo $act == 'index' && $cont == 'home' ? ' current' : ''; ?>">
                    <a class="home" href="<?php echo $this->webroot; ?>">HOME</a>
                </li>

                <?php if (AuthComponent::user()) {
                $authUser = AuthComponent::user();
                if ($authUser['role_id'] == 2) {?>
                    <li class="<?php echo $act == 'my_list' ? ' current' : ''; ?>">
                        <a class="list"  href="<?php echo $this->webroot; ?>properties/my_list">MY LIST</a>
                    </li>
                    <li class="<?php echo $act == 'index' && $cont == 'account' ? ' current' : ''; ?>">
                        <a class="list"  href="<?php echo $this->webroot; ?>account">ACCOUNT</a>
                    </li>
                <?php }?>
                    <li>
                        <a class="list"  href="<?php echo $this->webroot; ?>account/logout">LOGOUT</a>
                    </li>
                <?php }else{?>
                <li class="<?php echo $act == 'index' && $cont == 'properties' ? ' current' : ''; ?>">
                    <a class="list"  href="<?php echo $this->webroot; ?>properties">LIST</a>
                </li>

                <li class="<?php echo $act == 'member' ? ' current' : ''; ?>">
                    <a class="member" href="<?php echo $this->webroot; ?>account/login">MEMBER</a>
                </li>

                <li class="<?php echo $act == 'about' ? ' current' : ''; ?>">
                    <a class="about"  href="<?php echo $this->webroot; ?>about">ABOUT</a>
                </li>

                <li class="<?php echo $act == 'advertisements' ? ' current' : ''; ?>">
                    <a class="advertise"  href="<?php echo $this->webroot; ?>advertisements">ADVERTISE</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div><!--end of headerWrap-->