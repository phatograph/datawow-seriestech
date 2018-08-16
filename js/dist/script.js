'use strict';

var App = function App() {
  var $mobileMenuHandle = document.querySelector('.MobileMenu__handle');

  if ($mobileMenuHandle) {
    $mobileMenuHandle.addEventListener('click', function () {
      var $mobileMenuPanel = document.querySelector('.MobileMenu__panel');
      var $layout = document.querySelector('.Layout');

      $mobileMenuPanel.classList.toggle('MobileMenu__panel--active');
      $layout.classList.toggle('Layout--menu-open');
    });
  }
};

document.addEventListener('DOMContentLoaded', App, false);
