document.addEventListener('DOMContentLoaded', () => {
   if (!document.body.classList.contains('home')) {
      return
   }

   var scrollMagicController = new ScrollMagic.Controller()

   var scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#header .fade-in-3',
      reverse: false,
   })
      .setClassToggle('#header .fade-in-3', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#top-hero .fade-in-3',
      reverse: false,
   })
      .setClassToggle('#top-hero .fade-in-3', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#about-me .fade-in',
      reverse: false,
   })
      .setClassToggle('#about-me .fade-in', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#services .fade-in',
      reverse: false,
   })
      .setClassToggle('#services .fade-in', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#skills .fade-in',
      reverse: false,
   })
      .setClassToggle('#skills .fade-in', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#experience .fade-in',
      reverse: false,
   })
      .setClassToggle('#experience .fade-in', 'show')
      .addTo(scrollMagicController)

   scrollMagicScene = new ScrollMagic.Scene({
      triggerElement: '#projects .fade-in-2',
      reverse: false,
   })
      .setClassToggle('#projects .fade-in-2', 'show')
      .addTo(scrollMagicController)
})
