


<div id="content">
    <div class="tabs">
        <ul>
            <li class="first"><a href="#about">About</a></li>
            <li><a href="#privacy">Privacy Policy</a></li>
            <li class="last"><a href="#contact">Contact Us</a></li>
        </ul>
        <div id="about">
            <h1 class="title"><?php echo $content["Page"]["title"]; ?></h1>
            <p>
                <?php echo $content["Page"]["content"]; ?>
            </p>
        </div>
        <div id="privacy">
            <h1 class="title">Privacy Policy</h1>
           <p>
            <?php echo $content["Page"]["content"]; ?>
        </p>

        </div>

        <div id="contact">
            <h1 class="title">EMAIL US</h1>
            <div class="form">
                <form action="">
                    <div class="left">
                        <label>First Name</label>
                        <input type="text" />
                        <label>Email</label>
                        <input type="text" />
                        <label>Subject</label>
                        <input type="text" />
                    </div>
                    <div class="right">
                        <label>Last Name</label>
                        <input type="text" />
                        <label>MXVR #</label>
                        <input type="text" />
                    </div>
                    <div class="clear"></div>
                    <label>Comment</label>
                    <textarea></textarea>
                    <label>Attach File <a href="#"><img src="images/attach.png" /></a></label>
                    <span class="sub"><input type="submit" class="btnSub my_modal_open" value="Submit" /></span>
                </form>
                <div id="my_modal">
                    <div class="message">
                        <h1>Your message has been sent. <br/>One of our agents will contact you<br/>within 5 business days.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>