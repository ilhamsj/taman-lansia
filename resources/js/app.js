require('./bootstrap');
require('holderjs');
require('bs4-summernote');
require('select2');
require('datatables.net');
require('datatables.net-bs4');
require('animate.css');

const AOS = require('aos/dist/aos');
AOS.init();

const feather = require('feather-icons')
feather.replace()

import Swiper from 'swiper';

new Swiper('.swiper-container', {
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 30,
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  loop:true
});