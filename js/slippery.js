$('#pictures-demo').slippry({
  // general elements & wrapper
  slippryWrapper: '<div class="sy-slides-wrap" />', // wrapper to wrap everything, including pager

  // options
  adaptiveHeight: true, // height of the sliders adapts to current slide
  captions: false, // Position: overlay, below, custom, false

  // pager
  pager: false,

  // controls
  controls: false,
  autoHover: false,

  // transitions
  transition: 'kenburns', // fade, horizontal, kenburns, false
  kenZoom: 140,
  speed: 2000 // time the transition takes (ms)
});
