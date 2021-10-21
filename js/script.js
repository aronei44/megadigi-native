let nav = document.getElementById('nav');

setInterval(function(){
	let scr = window.scrollY;
	if(scr>50){
		nav.classList.add('fixed-top');
	}else{
		nav.classList.remove('fixed-top');
	}
},1);


const observer = new IntersectionObserver(entries => {
  // Loop over the entries
  entries.forEach(entry => {
    // If the element is visible
    if (entry.isIntersecting) {
      // Add the animation class
      entry.target.classList.add('animasi');
    }
  });
});
var ani = document.querySelectorAll('.anim');
ani.forEach(a=>{
	observer.observe(a);
});





