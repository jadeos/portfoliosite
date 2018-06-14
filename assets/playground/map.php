


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Playground finder app homepage" />
    <meta name="keywords" content="playground finder app,cork,playground, facility, assessible,map,location, app,map ">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Playground App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


	<!--load styles-->
    <link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />

    <![endif]-->
    <link href="css/style.css" rel="stylesheet">

    <!--google maps script code--->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=en"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw_905SZ49_I6yB0N0WTjXAohBvTkNmak&signed_in=true&callback=initMap"
        async defer></script>
    <script>
        //<![CDATA[
        var intervalId;
        $(function() {
            $( "input[type=submit], button" )
                .button()
                .click(function( event ) {
                    event.preventDefault();
                });


            var intervalValue = 15000;
            intervalId = setInterval("ChangeAdress()", intervalValue);
            $("#copy").click(function(){
                intervalId = setInterval("ChangeAdress()", intervalValue);
            });

            /*$("#routeEnd, #routeStart").click(function(){
             this.select();
             });*/

            $("input[type=text]").focus(function(){
                clearInterval(intervalId);
                //this.select();
            });
        });

        function calcRouteByClick(){
            clearInterval(intervalId);
            calcRoute();
        }

        var places = [	"mahon cork",

        ];

        places.sort(function(){return Math.random() > 0.5});
        var placeCounter = 0;
        function ChangeAdress(){
            if(placeCounter >= places.length ){
                //return;
                placeCounter = 0;
                places.sort(function(){return Math.random() > 0.5});
            }

            console.log(places[placeCounter]);
            $('#routeEnd').val(places[placeCounter]);
            calcRoute();

            placeCounter++;
        }

        var directionDisplay, map;
        var directionsService = new google.maps.DirectionsService();
        var geocoder = new google.maps.Geocoder();

        function initialize() {
            // set the default center of the map
            var latlng = new google.maps.LatLng(51.8779553,-8.5326058);
            // set route options (draggable means you can alter/drag the route in the map)
            var rendererOptions = { draggable: true };
            directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
            // set the display options for the map
            var myOptions = {
                zoom: 14,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false
            };
            // add the map to the map placeholder
            map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
            // bind the map to the directions
            directionsDisplay.setMap(map);
            // point the directions to the container for the direction details
            directionsDisplay.setPanel(document.getElementById("directionsPanel"));
            // start the geolocation API
            if (navigator.geolocation) {
                // when geolocation is available on your device, run this function
                navigator.geolocation.getCurrentPosition(foundYou, notFound);
            } else {
                // when no geolocation is available, alert this message
                alert('Geolocation not supported or not enabled.');
            }
        }

        function notFound(msg) {
            alert('Could not find your location :(')
        }

        function foundYou(position) {
            // convert the position returned by the geolocation API to a google coordinate object
            var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            // then try to reverse geocode the location to return a human-readable address
            geocoder.geocode({'latLng': latlng}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    // if the geolocation was recognized and an address was found
                    if (results[0]) {
                        // add a marker to the map on the geolocated point
                        marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        // compose a string with the address parts
                        var address = results[0].address_components[1].long_name+' '+results[0].address_components[0].long_name+', '+results[0].address_components[3].long_name

                        //set the current address by default
                        //$('#routeStart').val(address);

                        // set the located address to the link, show the link and add a click event handler
                        //$('.autoLink span').html(address).parent().show().click(function(){
                        //$('.autoLink span').html(address).parent().show().click(function(){
                        // onclick, set the geocoded address to the start-point formfield
                        $('#routeStart').val(address);
                        // call the calcRoute function to start calculating the route
                        calcRoute();
                        //});
                    }
                } else {
                    // if the address couldn't be determined, alert and error with the status message
                    alert("Geolocation failed due to: " + status);
                }
            });
        }

        function calcRoute() {
            // get the travelmode, startpoint and via point from the form
            var travelMode = $('input[name="travelMode"]:checked').val();
            var start = $("#routeStart").val();
            var end = $("#routeEnd").val();
            // compose a array with options for the directions/route request
            var request = {
                origin: start,
                destination: end,
                unitSystem: google.maps.UnitSystem.IMPERIAL,
                travelMode: google.maps.DirectionsTravelMode[travelMode]
            };
            // call the directions API
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    // directions returned by the API, clear the directions panel before adding new directions
                    $('#directionsPanel').empty();
                    // display the direction details in the container
                    directionsDisplay.setDirections(response);
                } else {
                    // alert an error message when the route could nog be calculated.
                    if (status == 'ZERO_RESULTS') {
                        alert('No route could be found between the origin and destination.');
                    } else if (status == 'UNKNOWN_ERROR') {
                        alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
                    } else if (status == 'REQUEST_DENIED') {
                        alert('This webpage is not allowed to use the directions service.');
                    } else if (status == 'OVER_QUERY_LIMIT') {
                        alert('The webpage has gone over the requests limit in too short a period of time.');
                    } else if (status == 'NOT_FOUND') {
                        alert('At least one of the origin, destination, or waypoints could not be geocoded.');
                    } else if (status == 'INVALID_REQUEST') {
                        alert('The DirectionsRequest provided was invalid.');
                    } else {
                        alert("There was an unknown error in your request. Requeststatus: nn"+status);
                    }
                }
            });
        }
        //]]>
    </script>

</head>
<body onload="initialize()">

    <!--canvas-->
    <div id="map_canvas" alt="googlemap" style="width:65%; height:100%;margin-left:105px;margin-top:-20px;"></div>
    <div id="navigation">-
        <div id="copy" alt="search playground"><span>PlayGround finder</span></div>

        <div id="scrollContainer">
            <!--form-->
            <form action="#" onSubmit="calcRoute();return false;" id="routeForm">
                <label>
                    From: <br />
                    <input type="text" id="routeStart" value="from here!">
                    <a href="#" class="autoLink" style="display: none;">Use current location: <span>not found</span></a>
                </label>
                <label>
                    To: <br />
                    <input type="text" id="routeEnd" value="bishopstown,cork">
                </label>
                <label><input type="radio" name="travelMode" value="DRIVING" checked /> Driving</label>
                <label><input type="radio" name="travelMode" value="BICYCLING" /> Bicylcing</label>
                <label><input type="radio" name="travelMode" value="TRANSIT" /> Public transport</label>
                <label><input type="radio" name="travelMode" value="WALKING" /> Walking</label>
                <!--<input type="submit" value="Calculate route">-->
                <button onclick="calcRouteByClick()" type="submit" >Show Directions</button>
            </form>

            <!--directions panel-->
            <div id="directionsPanel">
                Enter a starting point and click "Calculate route".
            </div>
        </div>

    </div>




    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



