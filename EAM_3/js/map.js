    /* ==============================================
    MAP -->
    =============================================== */
    //function initMap() {
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
    
        var map=new google.maps.Map(document.getElementById('map'), mapOptions)
    //}

    /*function addPolyline() {
        var locations=[
            {lat: 37.945778, lng: 23.641284},
            {lat: 37.972078, lng: 23.758553}
        ];

        var mypath = google.maps.Polyline({
            path: locations,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
        mypath.setMap(map);
    }*/