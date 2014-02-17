/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var cities = [
            "Bahia de los Suenos",
            "Boca del Salado",
            "Cabo Pulmo",
            "Cabo San Lucas",
            "El Centenario",
            "El Pescadero",
            "La Paz",
            "La Ribera",
            "La Ventana",
            "Las Vinoramas",
            "Loreto",
            "Los Barriles",
            "Los Cabos",
            "Los Frailes",
            "Los Zacatitos",
            "Mulege",
            "Nopolo",
            "Punta Chivato",
            "Rancho Leonero",
            "San Bruno",
            "San Jose del Cabo",
            "Todos Santos",
            "Bajamar",
            "Ensenada",
            "Mexicali",
            "Puerto Nuevo",
            "Punta Banda",
            "Rosarito",
            "San Felipe",
            "San Quintin",
            "Tecate",
            "Tijuana",
            "Alamos",
            "Bahia Kino",
            "Nogales",
            "Puerto Penasco",
            "San Carlos",
            "Chihuahua",
            "Ciudad Juarez",
            "Delicias",
            "Juarez",
            "Mazatlan",
            "Teacapan",
            "Durango",
            "Acuna",
            "Saltillo",
            "Torreon",
            "Monterrey",
            "Zacatecas",
            "Real de Catorce",
            "San Luis Potosi",
            "Tampico",
            "Bucerias",
            "Chacala",
            "La Cruz de Hunacaxtle",
            "Litibu",
            "Lo de Marcos",
            "Nuevo Vallarta",
            "Playa Las Tortugas",
            "Punta de Mita",
            "Punta del Burro",
            "Punta Esmeralda",
            "Rincon de Guayabitos",
            "San Francisco (San Pancho)",
            "Bara de Navidad",
            "Puerto Vallarta",
            "El Farralon",
            "Guadalajara",
            "Zapopan",
            "Dolores Hidalgo",
            "Guanajuato",
            "San Miguel de Allende",
            "Queretaro",
            "Tepeji del Rio de Ocampo",
            "Tulca",
            "Manzanillo",
            "Angahuan",
            "Angangueo",
            "Morelia",
            "Patzcuaro",
            "Uruapan",
            "Buenavista",
            "Malinalco",
            "Mexico City",
            "San Juan Teotihuacan",
            "Toluca",
            "Valle de Bravo",
            "Xochimilco",
            "Chalcatzingo",
            "Coatlan del Rio",
            "Cuernavaca",
            "Tepoztlan",
            "Cholula",
            "Puebla",
            "Catemaco",
            "Lake Catemaco",
            "Orizaba",
            "Veracruz",
            "Xalapa",
            "Ixtapa",
            "Zihuatanejo",
            "Huatulco",
            "Mazunte",
            "Mitla",
            "Monte Alban",
            "Oaxaca",
            "Puerto Angel",
            "Puerto Escondido",
            "Zipolite",
            "Agua Azul",
            "Chamula",
            "Chiapa de Corzo",
            "Ocozingo",
            "Palenque",
            "San Cristobal de las Casas",
            "Tapachula",
            "Villahermosa",
            "Calakmul",
            "Campeche",
            "Xpujil",
            "Celestun",
            "Chelem",
            "Cheichen Itza",
            "Chicxulub",
            "Chuburna",
            "Dzibilchaltun",
            "Ek Balam",
            "El Cuyo",
            "Izamal",
            "Kabah",
            "Merida",
            "Oxkutzcab",
            "Piste",
            "Progreso",
            "Rio Lagartos",
            "San Benito",
            "Santa Elena",
            "Sisal",
            "Telchac Puerto",
            "Tilcul",
            "Uxmal",
            "Valladolid",
            "Yucatan",
            "Akumal",
            "Bacalar",
            "Cancun",
            "Isla Mujeres",
            "Chemuil",
            "Chetumal",
            "Coba",
            "Costa Maya",
            "Cozumel",
            "Holbox",
            "Mahaual",
            "Playa del Carmen",
            "Puerto Aventuras",
            "Puerto Morelos",
            "Punta Allen",
            "Soliman Bay",
            "Tankah Bay",
            "Tulum",
            "Xcalak",
            "Xcaret",
            "Xel Ha"
        ];
        
var states = [
            "Baja California Sur",
            "Baja California Norte",
            "Sonora",
            "Chihuahua",
            "Sinaloa",
            "Durango",
            "Coahuila",
            "Nuevo León",
            "Zacatecas",
            "San Luis Potosi",
            "Tamaulipas",
            "Nayarit",
            "Aguascalientes",
            "Jalisco",
            "Guanajuato",
            "Querétaro",
            "Hidalgo",
            "Colima",
            "Michoacán",
            "Mexico",
            "Morelos",
            "Tlaxcala",
            "Puebla",
            "Veracruz",
            "Guerrero",
            "Oaxaca",
            "Chiapas",
            "Tabasco",
            "Campeche",
            "Yucatán",
            "Quintana",
            "Mexican Republic"
        ];
        
var callouts = {
            "Bahia de los Suenos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-468px",
                    "left":"86px"
                },
            "Boca del Salado":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-575px",
                    "left":"3px"
                },
            "Cabo Pulmo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-452px",
                    "left":"94px"
                },
            "Cabo San Lucas":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-443px",
                    "left":"83px"
                },
            "El Centenario":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-472px",
                    "left":"75px"
                },
            "El Pescadero":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-454px",
                    "left":"75px"
                },
            "La Paz":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-471px",
                    "left":"75px"
                },
            "La Ribera":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-456px",
                    "left":"91px"
                },
            "La Ventana":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-471px",
                    "left":"83px"
                },
            "Las Vinoramas":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-449px",
                    "left":"89px"
                },
            "Loreto":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-515px",
                    "left":"56px"
                },
            "Los Barriles":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-473px",
                    "left":"76px"
                },
            "Los Cabos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-450px",
                    "left":"85px"
                },
            "Los Frailes":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-452px",
                    "left":"93px"
                },
            "Los Zacatitos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-446px",
                    "left":"89px"
                },
            "Mulege":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-536px",
                    "left":"49px"
                },
            "Nopolo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-522px",
                    "left":"57px"
                },
            "Punta Chivato":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-545px",
                    "left":"43px"
                },
            "Rancho Leonero":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-463px",
                    "left":"87px"
                },
            "San Bruno":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-543px",
                    "left":"43px"
                },
            "San Jose del Cabo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-446px",
                    "left":"86px"
                },
            "Todos Santos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-454px",
                    "left":"76px"
                },
            "Bajamar":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-620px",
                    "left":"-25px"
                },
            "Ensenada":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-655px",
                    "left":"-36px"
                },
            "Mexicali":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-675px",
                    "left":"-10px"
                },
            "Puerto Nuevo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-663px",
                    "left":"-39px"
                },
            "Punta Banda":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-648px",
                    "left":"-35px"
                },
            "Rosarito":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-663px",
                    "left":"-39px"
                },
            "San Felipe":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-6px",
                    "left":"-646px"
                },
            "San Quintin":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-630px",
                    "left":"-25px"
                },
            "Tecate":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-680px",
                    "left":"-27px"
                },
            "Tijuana":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-675px",
                    "left":"-36px"
                },
            "Alamos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-540px",
                    "left":"108px"
                },
            "Bahia Kino":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-582px",
                    "left":"51px"
                },
            "Nogales":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-644px",
                    "left":"77px"
                },
            "Puerto Penasco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-647px",
                    "left":"25px"
                },
            "San Carlos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-563px",
                    "left":"68px"
                },
            "Chihuahua":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-577px",
                    "left":"170px"
                },
            "Ciudad Juarez":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-643px",
                    "left":"161px"
                },
            "Delicias":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-565px",
                    "left":"188px"
                },
            "Juarez":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-652px",
                    "left":"161px"
                },
            "Mazatlan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-448px",
                    "left":"164px"
                },
            "Teacapan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-433px",
                    "left":"174px"
                },
            "Durango":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-473px",
                    "left":"196px"
                },
            "Acuna":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-592px",
                    "left":"274px"
                },
            "Saltillo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-495px",
                    "left":"274px"
                },
            "Torreon":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-505px",
                    "left":"229px"
                },
            "Monterrey":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-516px",
                    "left":"288px"
                },
            "Zacatecas":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-435px",
                    "left":"243px"
                },
            "Real de Catorce":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-460px",
                    "left":"278px"
                },
            "San Luis Potosi":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-426px",
                    "left":"276px"
                },
            "Tampico":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-422px",
                    "left":"344px"
                },
            "Bucerias":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-389px",
                    "left":"186px"
                },
            "Chacala":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-405px",
                    "left":"184px"
                },
            "La Cruz de Hunacaxtle":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-389px",
                    "left":"183px"
                },
            "Litibu":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-398px",
                    "left":"181px"
                },
            "Lo de Marcos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-398px",
                    "left":"182px"
                },
            "Nuevo Vallarta":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-388px",
                    "left":"184px"
                },
            "Playa Las Tortugas":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-452px",
                    "left":"164px"
                },
            "Punta de Mita":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-393px",
                    "left":"178px"
                },
            "Punta del Burro":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-396px",
                    "left":"182px"
                },
            "Punta Esmeralda":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-392px",
                    "left":"184px"
                },
            "Rincon de Guayabitos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-405",
                    "left":"183px"
                },
            "San Francisco (San Pancho)":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-403px",
                    "left":"188px"
                },
            "Bara de Navidad":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-352px",
                    "left":"196px"
                },
            "Puerto Vallarta":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-383px",
                    "left":"180px"
                },
            "El Farralon":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-386px",
                    "left":"222px"
                },
            "Guadalajara":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-385px",
                    "left":"220px"
                },
            "Zapopan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-386px",
                    "left":"220px"
                },
            "Dolores Hidalgo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-398px",
                    "left":"280px"
                },
            "Guanajuato":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-397px",
                    "left":"272px"
                },
            "San Miguel de Allende":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-394px",
                    "left":"284px"
                },
            "Queretaro":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-386px",
                    "left":"294px"
                },
            "Tepeji del Rio de Ocampo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-370px",
                    "left":"316px"
                },
            "Tulca":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-377px",
                    "left":"316px"
                },
            "Manzanillo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-353px",
                    "left":"203px"
                },
            "Angahuan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-360px",
                    "left":"250px"
                },
            "Angangueo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-354px",
                    "left":"290px"
                },
            "Morelia":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-367px",
                    "left":"268px"
                },
            "Patzcuaro":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-356px",
                    "left":"252px"
                },
            "Uruapan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-357px",
                    "left":"252px"
                },
            "Buenavista":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-367px",
                    "left":"317px"
                },
            "Malinalco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-344px",
                    "left":"311px"
                },
            "Mexico City":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-342px",
                    "left":"315px"
                },
            "San Juan Teotihuacan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-356px",
                    "left":"317px"
                },
            "Toluca":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-347px",
                    "left":"307px"
                },
            "Valle de Bravo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-352px",
                    "left":"298px"
                },
            "Xochimilco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-349px",
                    "left":"318px"
                },
            "Chalcatzingo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-342px",
                    "left":"321px"
                },
            "Coatlan del Rio":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-342px",
                    "left":"314px"
                },
            "Cuernavaca":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-346px",
                    "left":"315px"
                },
            "Tepoztlan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-347px",
                    "left":"318px"
                },
            "Cholula":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-347px",
                    "left":"333px"
                },
            "Puebla":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-340px",
                    "left":"336px"
                },
            "Catemaco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-333px",
                    "left":"413px"
                },
            "Lake Catemaco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"400",
                    "left":"317"
                },
            "Orizaba":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-343px",
                    "left":"366px"
                },
            "Veracruz":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-347px",
                    "left":"384px"
                },
            "Xalapa":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-363px",
                    "left":"366px"
                },
            "Ixtapa":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-321px",
                    "left":"259px"
                },
            "Zihuatanejo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-318px",
                    "left":"262px"
                },
            "Huatulco":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-274px",
                    "left":"376px"
                },
            "Mazunte":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-270px",
                    "left":"379px"
                },
            "Mitla":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-301px",
                    "left":"386px"
                },
            "Monte Alban":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-301px",
                    "left":"376px"
                },
            "Oaxaca":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-304px",
                    "left":"376px"
                },
            "Puerto Angel":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-270px",
                    "left":"376px"
                },
            "Puerto Escondido":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-276px",
                    "left":"363px"
                },
            "Zipolite":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-270px",
                    "left":"376px"
                },
            "Agua Azul":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-315px",
                    "left":"473px"
                },
            "Chamula":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-306px",
                    "left":"462px"
                },
            "Chiapa de Corzo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-306px",
                    "left":"453px"
                },
            "Ocozingo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-307px",
                    "left":"473px"
                },
            "Palenque":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-319px",
                    "left":"473px"
                },
            "San Cristobal de las Casas":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-306px",
                    "left":"462px"
                },
            "Tapachula":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-257px",
                    "left":"477px"
                },
            "Villahermosa":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-327px",
                    "left":"462px"
                },
            "Calakmul":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-339px",
                    "left":"525px"
                },
            "Campeche":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-369px",
                    "left":"513px"
                },
            "Xpujil":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-348px",
                    "left":"533px"
                },
            "Celestun":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-404px",
                    "left":"510px"
                },
            "Chelem":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-412px",
                    "left":"522px"
                },
            "Cheichen Itza":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-398px",
                    "left":"550px"
                },
            "Chicxulub":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-410px",
                    "left":"539px"
                },
            "Chuburna":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-407px",
                    "left":"534px"
                },
            "Dzibilchaltun":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-412px",
                    "left":"536px"
                },
            "Ek Balam":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-406px",
                    "left":"560px"
                },
            "El Cuyo":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-419px",
                    "left":"567px"
                },
            "Izamal":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-404px",
                    "left":"548px"
                },
            "Kabah":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-389px",
                    "left":"527px"
                },
            "Merida":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-404px",
                    "left":"534px"
                },
            "Oxkutzcab":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-390px",
                    "left":"533px"
                },
            "Piste":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-403px",
                    "left":"522px"
                },
            "Progreso":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-415px",
                    "left":"534px"
                },
            "Rio Lagartos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-420px",
                    "left":"551px"
                },
            "San Benito":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-420px",
                    "left":"551px"
                },
            "Santa Elena":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-386px",
                    "left":"534px"
                },
            "Sisal":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-412px",
                    "left":"523px"
                },
            "Telchac Puerto":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-417px",
                    "left":"539px"
                },
            "Tilcul":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-388px",
                    "left":"535px"
                },
            "Uxmal":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-393px",
                    "left":"530px"
                },
            "Valladolid":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-400px",
                    "left":"558px"
                },
            "Yucatan":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-399px",
                    "left":"546px"
                },
            "Akumal":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-400px",
                    "left":"580px"
                },
            "Bacalar":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-349px",
                    "left":"555px"
                },
            "Cancun":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-416px",
                    "left":"587px"
                },
            "Isla Mujeres":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-416px",
                    "left":"591px"
                },
            "Chemuil":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-398px",
                    "left":"578px"
                },
            "Chetumal":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-352px",
                    "left":"555px"
                },
            "Coba":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-395px",
                    "left":"568px"
                },
            "Costa Maya":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-353px",
                    "left":"571px"
                },
            "Cozumel":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-392px",
                    "left":"583px"
                },
            "Holbox":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-423px",
                    "left":"579px"
                },
            "Mahaual":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-357px",
                    "left":"572px"
                },
            "Playa del Carmen":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-401px",
                    "left":"579px"
                },
            "Puerto Aventuras":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-394px",
                    "left":"576px"
                },
            "Puerto Morelos":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-410px",
                    "left":"586px"
                },
            "Punta Allen":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-371px",
                    "left":"572px"
                },
            "Soliman Bay":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-388px",
                    "left":"575px"
                },
            "Tankah Bay":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-410px",
                    "left":"585px"
                },
            "Tulum":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-389px",
                    "left":"575px"
                },
            "Xcalak":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-343px",
                    "left":"568px"
                },
            "Xcaret":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-411px",
                    "left":"581px"
                },
            "Xel Ha":{
                    "callout":"For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...",
                    "link":"#",
                    "top":"-396px",
                    "left":"577px"
                }
            
    };
        
        