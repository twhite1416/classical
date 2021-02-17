/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import './helpers/fontawesome'

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
  if (window.innerWidth > 1202) {
    $('body')
      .on('mouseenter mouseleave','.dropdown',toggleDropdown)
      .on('click', '.dropdown-menu a', toggleDropdown);
  }

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
});
