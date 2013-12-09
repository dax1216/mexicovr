		<div id="content" class="features premium">
			<div class="title">
				<h1>Advertising</h1>
				<div class="line"></div>
			</div>
			<div class="left">
				<h1 class="title">Premium</h1>
				<div class="box">
				
				<?php echo $this->Form->create('Advertisment', array('type' => 'post',
																	 'action' => 'add'
																	)
											  );
				?>
					<div class="title">
						<?php echo $this->Form->input('title', array('value' => 'title')); ?>
					</div>
					<div class="images">
						<?php echo $this->Form->button('image', array('class' => 'btnimages', 'value' => 'DOWNLOAD IMAGE', 'type' => 'button')) ?>
					</div>
					<div class="text">
						<?php echo $this->Form->input('description1', array('type' => 'textarea', 'class' => 'area', 'value' => 'description 1')); ?>
						<div class="lines"></div>
						<?php echo $this->Form->input('description2', array('type' => 'textarea', 'class' => 'area', 'value' => 'description 2')); ?>
						<div class="lines"></div>
						<?php echo $this->Form->input('propertyContact', array('value' => 'property contact')); ?>
						<div class="lines"></div>
						<?php echo $this->Form->input('propertyPrice', array('value' => 'property price')); ?>
						<div class="lines"></div>
						<?php echo $this->Form->textarea('propertyAddress', array('type' => 'textarea', 'class' => 'area', 'value' => 'property address')); ?>
					</div>
				<?php echo $this->Form->end(); ?>
				<!--
					<form action="">
						<div class="title">
							<input type="text" class="titles" value="EDIT TITLE" placeholder="TITLE" />
						</div>
						<div class="images">
							<input type="button" value="DOWNLOAD IMAGE" class="btnimages" />
						</div>
						<div class="text">
							<textarea class="area">EDIT DESCRIPTION</textarea>
							<div class="lines"></div>
							<textarea class="area">EDIT DESCRIPTION</textarea>
						</div>
					</form>
				-->

			</div>
			<div class="button">
				<a href="advertising-submit.html"><span class="sub"><input type="submit" value="NEXT" class="btnPre"/></span></a>
			</div>
			</div>
			<div class="right">
				<div id="content">
					<div class="title">
						<h1>Features</h1>
					</div>
					<div class="white">
						<div class="scroll">
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
							<p>gjdsklgjdgdsgdsgdsgdsgds</p>
						</div>
					</div>
				</div>
			</div>
		</div>