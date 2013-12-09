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

					<li class="<?php echo $act == 'index' && $cont == 'properties' ? ' current' : ''; ?>">
                                            <a class="list"  href="<?php echo $this->webroot; ?>properties">LIST</a>
                                        </li>

					<li class="<?php echo $act == 'member' ? ' current' : ''; ?>">
                                            <a class="member" href="<?php echo $this->webroot; ?>account/member">MEMBER</a>
                                        </li>

					<li class="<?php echo $act == 'about' ? ' current' : ''; ?>">
                                            <a class="about"  href="<?php echo $this->webroot; ?>about">ABOUT</a>
                                        </li>
                                        
					<li class="<?php echo $act == 'advertisements' ? ' current' : ''; ?>">
                                            <a class="advertise"  href="<?php echo $this->webroot; ?>advertisements">ADVERTISE</a>
                                        </li>
                                   
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div><!--end of headerWrap-->