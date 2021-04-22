<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMALI</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Load css styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pluton.css') }}" />
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pluton-ie7.css') }}" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.cslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/apple-touch-icon-72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/ico/logo.png') }}">
    <link href='{{ asset('css/bootstrap-datepicker.min.css') }}' rel='stylesheet' type='text/css'>
{{--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDCWD_q5NoEyVblC1mtS2bl08kukrnzDQs&region=MA"></script>--}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCWD_q5NoEyVblC1mtS2bl08kukrnzDQs&libraries=places&region=MA"
            async defer></script>
   <script type="text/javascript">
        var directionsService;
        var map,geocoder, marker;
        var depart,arrivee,ptCheck;

        /*initialise google MAP V3*/
        function init(divmap,adreDep,adrArr) {
            depart = "";
            arrivee = "";
            ptCheck = "";
            directionsService = new google.maps.DirectionsService();

            /*gestion des routes*/
            directionsDisplay = new google.maps.DirectionsRenderer();
            var maison = new google.maps.LatLng(34.003620,-6.846450);
            /*option par défaut de la carte*/
            var myOptions = {
                zoom:10,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: maison
            }
            /*creation de la map*/
            map = new google.maps.Map(document.getElementById(divmap), myOptions);
            /*connexion de la map + le panneau de l'itinéraire*/
            directionsDisplay.setMap(map);
            //directionsDisplay.setPanel(document.getElementById("divRoute"));
            /*intialise le geocoder pour localiser les adresses */
            geocoder = new google.maps.Geocoder();
            localisation(adreDep,true)
            localisation(adrArr,false)

        }

        function localisation(Idinput,boolId)
        {
            var inputValue = document.getElementById(Idinput).value;
            const autocomplete= new google.maps.places.Autocomplete(
                document.getElementById(Idinput));
            const infowindow = new google.maps.InfoWindow();
            // const infowindowContent = document.getElementById("divMap");
            // infowindow.setContent(infowindowContent);
            // const marker = new google.maps.Marker({
            //     map,
            //     anchorPoint: new google.maps.Point(0, -29),
            // });

            if(inputValue != ""){
                rechercher(Idinput,boolId)
            }
            autocomplete.addListener("place_changed", () => {
                rechercher(Idinput,boolId)
            });
        }


        function trouveRoute() {
            /*test si les variables sont bien initialisés*/
            if (depart && arrivee)
            {
                /*mode de transport*/
                var choixMode = "DRIVING";

                var request = {
                    origin:depart,
                    destination:arrivee,
                    travelMode: google.maps.DirectionsTravelMode[choixMode]
                };
                /*appel à l'API pour tracer l'itinéraire*/
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                });
            }
        }

        function rechercher(src,code)
        {
            ptCheck = code; /*adresse de départ ou arrivée ? */
            if (geocoder) {
                geocoder.geocode( { 'address': document.getElementById(src).value}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        /*ajoute un marqueur à l'adresse choisie*/
                        map.setCenter(results[0].geometry.location);
                        if (marker) { marker.setMap(null);}

                        /*on remplace l'adresse par celle fournie du geocoder*/
                        document.getElementById(src).value = results[0].formatted_address;
                        if (ptCheck)
                        {
                            marker = new google.maps.Marker({
                                map: map,
                                position: results[0].geometry.location
                            });
                            depart = results[0].formatted_address;
                        } else
                        {
                            arrivee = results[0].formatted_address;
                        }
                        /*trace la route*/
                        trouveRoute();
                    } else {
                        alert("Geocode n'a rien trouvé !\n raison : " + status);
                    }
                });
            }

        }
    </script>
    <script>
        function onSubmit(token) {
            document.getElementById("marchandiseForm").submit();
        }
    </script>

</head>
<body>
{{--<body  onload="initAutocomplete()">--}}
    @include("partial.header")

    @include("sections.transportMarchandises")

    @include("sections.transportPersonnel")

    @include("sections.transportTouristique")

    @include("sections.partners")

{{--    @include("sections.newsletter")--}}

    @include("sections.contact")

    <!-- Footer section start -->
    <div class="footer">
    {{--    <p>&copy; 2013  </p>--}}
    </div>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->
    <div class="scrollup">
        <a href="#">
            <i class="icon-up-open"></i>
        </a>
    </div>
    <!-- ScrollUp button end -->
    <!-- Include javascript -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.inview.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/forms.js') }}"></script>
    <!-- Load google maps api and call initializeMap function defined in app.js -->

    <script src='{{ asset('js/bootstrap-datepicker.min.js') }}' type='text/javascript'></script>

    <!-- css3-mediaqueries.js for IE8 or older -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>



    <script>
        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            var idName="";
            $(document).on("focus", ".autocomplete", function () {
                idName=this.id;
                autocomplete = new google.maps.places.Autocomplete(document.getElementById(idName));
                autocomplete.setFields(["place_id"]);
                console.log(autocomplete)
            });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
            console.log(place)
            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datepicker').datepicker();
        });

        document.getElementById('phone').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,5})/);
            e.target.value = !x[2] ? x[1] :  x[1]  + x[2] + (x[3] ? '-' + x[3] : '');
        });
    </script>
</body>
</html>
