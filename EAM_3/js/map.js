 /* ==============================================
    MAP -->
    =============================================== */
    var map;
    function initMap() {
        var mapOptions = {
            zoom: 12,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: true,
            center: new google.maps.LatLng(37.983810, 23.727539),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]
                }]
            }]
        }
    
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
    }

    function addPolyline() {
        var locations = [
            {lat: 37.9460535, lng: 23.6410725},
            {lat: 37.948945, lng: 23.737017}
        ];

        var mypath = new google.maps.Polyline({
            map: map,
            path: locations,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
    }
