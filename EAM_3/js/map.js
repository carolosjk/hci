    /* ==============================================
    MAP -->
    =============================================== */
    
    var locations=[ ['<div class="infobox"><h3 class="title"><a href="#">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><span>+90 555 666 77 88</span></div>',
    37.983810,
    23.727539,
    2]];
    var map=new google.maps.Map(document.getElementById('map'), {
        zoom: 12, scrollwheel: false, navigationControl: true, mapTypeControl: false, scaleControl: false, draggable: true, styles: [ {
            "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]}]
        }
        ], center: new google.maps.LatLng(37.983810, 23.727539), mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    )