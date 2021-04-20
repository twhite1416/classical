/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import './helpers/fontawesome';
import './jquery.vmap.min.js';
import './jquery.vmap.usa.js';

//Navbar helper
function toggleDropdown (e) {
  const _d = $(e.target).closest('.dropdown'),
      _m = $('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

$(document).ready(() => {
  //swap hover for clicks for mobile nav
  
  $('body')
    .on('click', '.dropdown-menu a', toggleDropdown);
  

  //set the first carousel item active
  if ($(".carousel-inner").length) {
    $(".carousel-inner .carousel-item").first().addClass("active");  
  }

  // bind change event to virtue select
  if($('#virtue-selector').length) {
    $('#virtue-selector').on('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
        window.location = url; // redirect
      }
      return false;
    });
  }

  $('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: '#FFF',
    borderColor: '#FFF',
    borderOpacity: 1,
    borderWidth: 1,
    color: '#ededed',
    enableZoom: false,
    hoverColor: '#ccc',
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#ccc',
    selectedRegions: null,
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
      $('input[name="search_keywords"]').val(region).trigger('change');
      
//         var message = 'You clicked "'
//             + region
//             + '" which has the code: '
//             + code.toUpperCase();
// 
//         console.log(message);
    }
    });
});
