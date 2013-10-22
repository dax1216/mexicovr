<h2>Contact Us</h2>
<hr>
<?php
    echo $this->Form->create(array('novalidate' => true));
    echo $this->Form->input('firstname', array('label' => 'First Name'));
    echo $this->Form->input('lastname', array('label' => 'Last Name'));
    echo $this->Form->input('mxvrno', array('label' => 'MXVR #'));
    echo $this->Form->input('email_address', array('label' => 'Email Address'));
    echo $this->Form->input('subject', array('label' => 'Subject'));
    echo $this->Form->input('comment', array('type' => 'textarea', 'label' => 'Comment'));
    echo $this->Recaptcha->display();    
    echo $this->Form->submit('Send', array('class' => 'btn btn-primary'));
    echo $this->Form->end();
?>