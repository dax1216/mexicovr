 	SyntaxHighlighter.config.clipboardSwf = '../highlighter/scripts/clipboard.swf';
	SyntaxHighlighter.all();

	jQuery(document).ready(function() {
      jQuery.noConflict();
  		jQuery("#datefrom").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar_icon.png' alt=''/>" });
  		jQuery("#dateto").datepicker({ picker: "<img class='picker' align='middle' src='images/calendar_icon.png' alt=''/>" });
  

      jQuery.noConflict();
  		jQuery('.scroll').jScrollPane(
			{
				showArrows: false,
				arrowScrollOnHover: true,
				verticalDragMinHeight: 30,
				verticalDragMaxHeight: 30,
				autoReinitialise: true,
				verticalGutter: 10
			}
		);
  	});
        
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