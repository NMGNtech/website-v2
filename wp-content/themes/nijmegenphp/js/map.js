(function($) {
    L.mapbox.accessToken = 'pk.eyJ1IjoibmlqbWVnZW5waHAiLCJhIjoiY2loZ3B0b2NmMDRuNnUyajd4MThjd2Y3dCJ9.JxyFy5RYMX2Nc2_BFwaBTw';
})(jQuery);

function generateMap(target, lat, lon) {
    var map = L.mapbox.map(target, 'mapbox.streets').setView([lat, lon], 16);

    L.marker([lat, lon], {
        icon: L.mapbox.marker.icon({
            'marker-size': 'large',
            'marker-symbol': 'embassy',
            'marker-color': '#41759d'
        })
    }).addTo(map);
}
