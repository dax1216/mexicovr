<div id="content">
    <div id="contact" class="listing">
        <h1 class="title">Description of your listing</h1>
        <div class="form">

            <form action="">
                <label>Title of your Listing: </label>
                <input type="text" />
                <div class="line-black"></div>
                <label>Description of the Villa:<br/>(No limit of characters)</label>
                <textarea type="text" class="city"></textarea>

                <div class="right">
                    <label>Number of Bedrooms: </label>
                    <div id="dd" class="wrapper-dropdown-1" tabindex="1">

                        <select>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>

                    </div>
                    <label>Number of Bedrooms: </label>
                    <div id="dd1" class="wrapper-dropdown-1" tabindex="1">
                        <select>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>

                <div class="clear"></div>
            </form>

        </div>
        <div class="line"></div>
        <div class="left">
            <h1 class="title">List of activities</h1>

            <ul class="activity">

                <?php ?>
                <li>
                    <div class="squaredFour">
                        <img src="<?php echo $this->webroot; ?>images/fishing.png" />
                        <input type="checkbox" value="Fishing" id="squaredFour0" name="Fishing" />
                        <label for="squaredFour0"></label><span class="text">Fishing</span>
                    </div>
                </li>
                <?php ?>

            </ul>

        </div>
        <div class="clear"></div>
        <div class="line"></div>
        <div class="buttons">
                <!-- <span class="back"><input type="submit" class="btnback" value="<< BACK" /></span> -->
            <a href="listing-rate.html"><span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span></a>
        </div>
    </div>

</div>