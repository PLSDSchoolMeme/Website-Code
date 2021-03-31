var menu = document.getElementById('menu');
var nav = document.getElementById('nav');
var exit = document.getElementById('exit');

menu.addEventListener('click', function(e) {
    nav,classList.toggle('hide-mobile');
    e.preventDefult();
  });

  nav.addEventListener('click', function(e) {
      nav,classList.toggle('hide-mobile');
      e.preventDefult();
  });

    exit.addEventListener('click', function(e) {
        nav,classList.toggle('hide-mobile');
        e.preventDefult();
  });