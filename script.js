const hamButton = document.querySelector('.ham-menu');
const navMenu = document.querySelector('.nav-menu');
const navContainer = document.querySelector('.nav-container')
hamButton.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamButton.classList.toggle('open');
    navContainer.classList.toggle('activate');
   
});





  $(document).ready(function() {
    $('#autoWidth,#autoWidth2,#autoWidth3').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
  

