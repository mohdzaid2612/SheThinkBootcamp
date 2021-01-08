new Splide(".splide", {
  perPage: 3,
  rewind: true,
  arrows: false,
  gap: "1em",
  autoplay: true,
  easing: "ease",
  perMove: 1,
  speed: 1000,
  waitForTransition: false,
  type: "loop",
  pagination: false,
  breakpoints: {
    844: {
      perPage: 2,
    },
    545: {
      perPage: 1,
      gap: "1em",
    },
  },
}).mount();

new TypeIt("#simpleUsage", {
  speed: 200,
  loop: true,
})
  .type("consolelog")
  .move(-3, { speed: 100, delay: 150 })
  .type(".")
  .move("END")
  .type(`("Learn")`)
  .pause(1000)
  .move(-2, { speed: 100, delay: 250 })
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .type("Code")
  .pause(1000)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .type("Upskill")
  .pause(1000)
  .go();

new TypeIt("#Success", {
  speed: 300,
  loop: true,
})
  .type("“Success”")
  .pause(500)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .type("“Winner”")
  .pause(500)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .delete(1)
  .go();

// $(".Button").tilt({
//   scale: 1.1,
//   glare: true,
//   maxGlare: 0.5,
// });
