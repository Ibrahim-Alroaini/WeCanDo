

(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 100
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 200) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 200) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  // on('click', '.mobile-nav-toggle', function(e) {
    

  //   select('#navbar').classList.toggle('navbar-mobile')
  //   this.classList.toggle('bi-list')
  //   this.classList.toggle('bi-x')
  //       e.preventDefault();

  // })
  document.querySelector('.mobile-nav-toggle').addEventListener('click', function(e) {
    document.querySelector('#navbar').classList.toggle('navbar-mobile');
    this.classList.toggle('bi-list');
    this.classList.toggle('bi-x');
    e.preventDefault();

}, 300);

// Assuming you have a debounce function
// var debouncedClick = debounce(function(e) {
//   select('#navbar').toggleClass('navbar-mobile');
//   this.classList.toggle('bi-list');
//   this.classList.toggle('bi-x');
// }, 300); // Set an appropriate debounce time

// document.on('click', '.mobile-nav-toggle', debouncedClick);

    on('click', '.scrollto', function(e) {
      if (select(this.hash)) {
        e.preventDefault()
  
        let navbar = select('#navbar')
        if (navbar.classList.contains('navbar-mobile')) {
          navbar.classList.remove('navbar-mobile')
          let navbarToggle = select('.mobile-nav-toggle')
          navbarToggle.classList.toggle('bi-list')
          navbarToggle.classList.toggle('bi-x')
        }
        scrollto(this.hash)
      }
    }, true)

  

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
 
   */

  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);




      on('click', '#portfolio-flters li', function (e) {
        e.preventDefault();
        portfolioFilters.forEach(function (el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function () {
          AOS.refresh()
        });
      }, true);
    }

  });
  




  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

  /**
   * Initiate Pure Counter 
   */
   new PureCounter();

})()




function GotoNext() {

  for (let i = 0; i < items.length; i++) {
    if (items[i].No >= itemsList) {
      document.getElementById("No").innerHTML += items[i].No + "</br>";
      document.getElementById("Clients").innerHTML += items[i].Clients + "</br>";
      document.getElementById("Service").innerHTML += items[i].Service_Type + "</br>";
      document.getElementById("Location").innerHTML += items[i].Location + "</br>";
      document.getElementById("ofService").innerHTML += items[i].of_Service + "</br>";

      itemsList = items[i].No;

    }

  }
}
function Gotoprvious() {
  for (let i = 0; i < items.length; i++) {

    document.getElementById("No").innerHTML += items[i].No + "</br>";
    document.getElementById("Clients").innerHTML += items[i].Clients + "</br>";
    document.getElementById("Service").innerHTML += items[i].Service_Type + "</br>";
    document.getElementById("Location").innerHTML += items[i].Location + "</br>";
    document.getElementById("ofService").innerHTML += items[i].of_Service + "</br>";



  }

}




function toggleServicesText(textId, readMoreButtonId) {
  var textServices = document.getElementById(textId);
  var buttonServices = document.getElementById(readMoreButtonId);
  if (textServices.style.overflow === "hidden") {
    textServices.style.overflow = "visible";
    textServices.style.maxHeight = "none";
    buttonServices.innerHTML = "Read Less";
  } else {
    textServices.style.overflow = "hidden";
    textServices.style.maxHeight = "100px"; // Adjust the height as needed
    buttonServices.innerHTML = "Read More";
  }
}



// document.addEventListener('DOMContentLoaded', function () {
//   var aboutUsText = document.getElementById('aboutUstext');
//   var readMoreButton = document.getElementById('readMoreButton');
//   // Check if the text content overflows the max height
//   if (aboutUsText.scrollHeight > aboutUsText.clientHeight) {
//     readMoreButton.style.display = 'block'; // Show the "Read More" button
//   }

//   readMoreButton.addEventListener('click', function () {
//     aboutUsText.classList.toggle('expanded');
//     if (aboutUsText.classList.contains('expanded')) {
//       readMoreButton.innerText = 'Read Less';
//     } else {
//       readMoreButton.innerText = 'Read More';
//     }
//   });
// });

// document.addEventListener('DOMContentLoaded', function () {
//   var aboutUsText = document.getElementById('aboutUstext1');
//   var readMoreButton = document.getElementById('readMoreButton1');
//   // Check if the text content overflows the max height
//   if (aboutUsText.scrollHeight > aboutUsText.clientHeight) {
//     readMoreButton.style.display = 'block'; // Show the "Read More" button
//   }

//   readMoreButton.addEventListener('click', function () {
//     aboutUsText.classList.toggle('expanded');
//     if (aboutUsText.classList.contains('expanded')) {
//       readMoreButton.innerText = 'Read Less';
//     } else {
//       readMoreButton.innerText = 'Read More';
//     }
//   });
// });
// document.addEventListener('DOMContentLoaded', function () {
//   var aboutUsText2 = document.getElementById('aboutUstext2');
//   var readMoreButton2 = document.getElementById('readMoreButton2');

//   // Check if the text content overflows the max height
//   if (aboutUsText2.scrollHeight > aboutUsText2.clientHeight) {
//     readMoreButton2.style.display = 'block'; // Show the "Read More" button
//   }

//   readMoreButton2.addEventListener('click', function () {
//     aboutUsText2.classList.toggle('expanded');
//     if (aboutUsText2.classList.contains('expanded')) {
//       readMoreButton2.innerText = 'Read Less';
//     } else {
//       readMoreButton2.innerText = 'Read More';
//     }
//   });
// });

// document.getElementById("downloadPdfButton").addEventListener("click", function () {
//   // URL of your PDF file
//   var pdfUrl = 'wecondo_profile.pdf';



//   // Create a hidden link to trigger the download
//   var link = document.createElement("a");
//   link.href = pdfUrl;
//   link.download = "wecondo_profile.pdf"; // Optional, set the filename for download
//   link.style.display = "none";
//   document.body.appendChild(link);

//   // Trigger the download
//   link.click();

//   // Clean up by removing the link
//   document.body.removeChild(link);
// });



// table clint
// $(window).on("load resize ", function() {
//   var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
//   $('.tbl-header').css({'padding-right':scrollWidth});
// }).re



// $(document).ready(function () {
//   $('[data-toggle="tooltip"]').tooltip();
//   // Animate select box length
//   var searchInput = $(".search-box input");
//   var inputGroup = $(".search-box .input-group");
//   var boxWidth = inputGroup.width();
//   searchInput.focus(function () {
//     inputGroup.animate({
//       width: "300"
//     });
//   }).blur(function () {
//     inputGroup.animate({
//       width: boxWidth
//     });
//   });
// });

// window.onload = function () {
//   const items = [
//     { No: 1, Clients: 1, Service_Type: "Local Authority achievement the increase, invigorating, and annotation of an 8-kilometer gravel  road along", Location: "Marib/Airport route ", of_Service: 2023 },
//   ];
//   for (let i = 0; i < items.length; i++) {
//     document.getElementById("No").innerHTML += items[i].No + "</br>";
//     document.getElementById("Clients").innerHTML += items[i].Clients + "</br>";
//     document.getElementById("Service").innerHTML += items[i].Service_Type + "</br>";
//     document.getElementById("Location").innerHTML += items[i].Location + "</br>";
//     document.getElementById("ofService").innerHTML += items[i].of_Service + "</br>";
//   }
// };




