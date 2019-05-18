console.log(bodymovin);

var animation = bodymovin.loadAnimation({
  container: document.getElementById('lottie'), // Required
  path: '/data.json', // Required
  renderer: 'svg', // Required
  loop: false, // Optional
  autoplay: true ,// Optional
});

// animation.addEventListener('complete', function(){
//     animation.destroy()
// })