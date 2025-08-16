var coords = [36.184402445333134, -115.95528754494798];

var map = L.map('map', {
    center: coords,
    zoom: 10,
    zoomControl: false,  
    minZoom: 10,          
    maxZoom: 18,
    scrollWheelZoom: false,
    dragging: true           
});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            
    }).addTo(map);

    var redIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [50, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    L.marker(coords, {icon: redIcon}).addTo(map)
        .bindPopup('3190 HW-160, Suite F, Pahrump')
        .openPopup();

        var zoomCustom = L.control.zoom();
        zoomCustom.addTo(map);

        var zoomEl = document.querySelector('.leaflet-control-zoom');
        document.getElementById('mapControls').appendChild(zoomEl);

    var openLocationControl = L.Control.extend({
        options: { position: 'topleft' },

        onAdd: function (map) {
            var container = L.DomUtil.create('div', 'leaflet-control-locate');
            container.innerHTML = container.innerHTML = '<i class="loc fas fa-location-arrow"></i>  Get Direction';; 

            container.onclick = function(){
                var url = `https://www.google.com/maps/dir/?api=1&destination=${coords[0]},${coords[1]}`;
                window.open(url, '_blank');
            }

            return container;
        }
    });

    map.addControl(new openLocationControl());


    var centerControl = L.Control.extend({
        options: { position: 'bottomright' },

        onAdd: function(map) {
            var container = L.DomUtil.create('div', 'leaflet-control-center');
            container.innerHTML = '<i class="fas fa-crosshairs"></i>'; 

            container.onclick = function() {
                map.setView(coords, map.getZoom());
            }

            return container;
        }
    });

    map.addControl(new centerControl());