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
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});