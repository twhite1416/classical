/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import './helpers/fontawesome'

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
  if (window.innerWidth > 1202) {
    $('body')
      .on('mouseenter mouseleave','.dropdown',toggleDropdown)
      .on('click', '.dropdown-menu a', toggleDropdown);
  }
  if ($(".carousel-inner").length) {
    $(".carousel-inner .carousel-item").first().addClass("active");  
  }
});
