// Map
jQuery(document).ready(function() {
    jQuery('#vmap').vectorMap(
        {
            map: 'world_en',
            backgroundColor: 'null',
            borderColor: '#ffffff44',
            borderOpacity: 0.25,
            borderWidth: 1,
            color: '#ffffff03',
            enableZoom: false,
            hoverColor: '#b6d6ff',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#b6d6ff',
            selectedRegions: ['DE', 'FR', 'RS'],
            showTooltip: true,
        });
        jQuery('#vmap').vectorMap('zoomIn');
        jQuery('#vmap').vectorMap('zoomIn');
});

document.querySelector('.map').addEventListener('touchmove', function(event) {
    event.preventDefault();
}, { passive: false });
