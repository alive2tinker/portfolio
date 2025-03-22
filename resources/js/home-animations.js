import anime from 'animejs/lib/anime.es.js';

var tl = anime.timeline({
    easing: 'easeOutExpo',
    duration: 750
  });
  
  const typingElement = document.querySelector('#typing-text');

  // Add children
  tl
  .add({
    targets: '.logo-svg',
    marginTop: 8
  })
  .add({
    targets: '.nav-element',
    marginTop:8
  })
  .add({
    targets: '.nav-toggle-buttons',
    marginTop:8
  })
  .add({
    targets: '.main-description',
    opacity: 100,
    easing: 'easeInOutQuad',
    duration: 2000,
})
.add({
    targets: '.personal-foto',
    opacity: 100,
    easing: 'easeInOutQuad',
    duration: 2000,
})
.add({
  targets: '.secondary-description',
  opacity: 100,
  easing: 'easeInQuad',
}).add({
    targets: '.social-link:nth-child(1)',
    marginTop: -10,
    opacity: 100,
    duration: 500
  }).add({
    targets: '.social-link:nth-child(2)',
    marginTop: -10,
    opacity: 100,
    duration: 500
  }).add({
    targets: '.social-link:nth-child(3)',
    marginTop: -10,
    opacity: 100,
    duration: 500
  }).add({
    targets: '.experience-container',
    translateX: 0,
    opacity: 100,
    duration: 3000,
    easing: 'easeOutExpo'
  }).add({
    targets: '#skills-container',
    translateX: 0,
    opacity: 100,
    duration: 3000,
    easing: 'easeOutExpo'
  })