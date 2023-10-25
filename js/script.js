(() => {

  'use strict'

  let myForm = document.getElementById("myForm");

  myForm.addEventListener("submit", function (event) {

    event.preventDefault()
    event.stopPropagation()

    let siteKey = '6LdB78ImAAAAAIOcpJ5gKgTyKhgIdGGiR-3zdBZJ';

    grecaptcha.ready(function () {
      
      grecaptcha.execute(siteKey, { action: "submit" }).then(function (token) {

        // Add the 'g-recaptcha-response' field to your form
        var recaptchaResponse = document.createElement("input");
        recaptchaResponse.setAttribute("type", "hidden");
        recaptchaResponse.setAttribute("name", "g-recaptcha-response");
        recaptchaResponse.setAttribute("value", token);
        myForm.appendChild(recaptchaResponse);

        // If form is valid
        if (myForm.checkValidity()) {
          myForm.submit();
        }

      });

    });

  });

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
// navbar
$(document).ready(function () {
  // executes when HTML-Document is loaded and DOM is ready

  // breakpoint and up  
  $(window).resize(function () {
    if ($(window).width() >= 980) {

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
        $(this).parent().toggleClass("show");
        $(this).parent().find(".dropdown-menu").toggleClass("show");
      });

      // hide the menu when the mouse leaves the dropdown
      $(".navbar .dropdown-menu").mouseleave(function () {
        $(this).removeClass("show");
      });

      // do something here
    }
  });



  // document ready  
});

var navLinks = document.querySelectorAll('.nav-link');

for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener('click', function (event) {
    event.preventDefault();
    var megaMenu = this.nextElementSibling;

    if (megaMenu.style.display === 'block') {
      megaMenu.style.display = 'none';
    } else {
      megaMenu.style.display = 'block';
    }
  });
}



function toggleTopBarDisplay() {
  var topBar = document.querySelector('.m-top-bar');
  topBar.style.display = (topBar.style.display === 'none') ? 'flex' : 'none';
}

function handleClick() {
  toggleTopBarDisplay();
}

// Add event listener to the button
var button = document.querySelector('.toggle-btnn');
button.addEventListener('click', handleClick);

