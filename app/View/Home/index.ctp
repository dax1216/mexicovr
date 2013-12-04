 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<script>
  $(function() {
    var availableDestination = [
      "San Jose del Cabo",
      "La Paz",
      "Ciudad Constitucion",
      "Tijuana",
      "Mexicali",
      "Ciudad Juarez",
      "Guaymas",
      "Los Mochis",
      "Culiacan",
      "Los Mochis",
      "Culiacan",
      "Guadalajara",
      "Toluca",
      "Cuernavaca",
      "Acapulco",
      "Tuxtla Gutierrez",
      "Chetumal",
      "Merida",
      "Campeche",
      "Pueblo",
      "Pachuca",
      "Queretaro",
      "Mexico City",
      "Leon",
      "San Luis Potosi",
      "Ciudad Victoria",
      "Monterrey",
      "Torreon",
      "Chihuahua",
      "Ciudad Juarez"
    ];
    $("#destination").autocomplete({
      source: availableDestination
    });
  });
 </script>



<div class="search-property">
    <form action="">
        <a href="#" class="search-rentprop rent-current"></a>
        <a href="#" class="search-buyprop"></a>
        <input type="text" class="destination" placeholder="DESTINATION" id="destination">
        <div class="lines"></div>
        <div id="dd" class="wrapper-dropdown-1" tabindex="1">
            <span>BEDROOMS</span>
            <ul class="dropdown" tabindex="1">
                <li><a href="#">1 BEDROOM</a></li>
                <li><a href="#">2 BEDROOMS</a></li>
            </ul>
        </div>
        <span class="dateholder">
            <span class="date-bg"><input type="text" class="datefrom" id="datefrom" placeholder="FROM" /></span>
            <span class="date-bg"><input type="text" class="dateto" id="dateto" placeholder="TO" /></span>
        </span>
        <div class="or">OR</div>
        <input type="textbox" class="mxvrno" placeholder="ENTER MXVR #" />
        <div class="lines"></div>
        <span class="sub"><input type="submit" value="SEARCH" class="btnsearch-property" /></span>
    </form>
</div>

<div class="searchmap">
    <img class="imgmap" src="images/map.png" />

    <div class="callout-sanjose" id="sanjose">
        <div class="callout-header">Acapulco</div>
        <p>For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...</p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>
    
     <div class="callout-lapaz" id="lapaz">
        <div class="callout-header">Acapulco</div>
        <p>For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...</p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>
    
     <div class="callout-ciudad" id="ciudad">
        <div class="callout-header">Acapulco</div>
        <p>For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...</p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>

</div>
