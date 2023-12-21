function initializeSwiperRANDOMID(){
    // Launch SwiperJS  
   const swiper = new Swiper(".mySwiper-RANDOMID", {
           slidesPerView: 1,
           grabCursor: true,
           spaceBetween: 30,
           pagination: {
               el: ".swiper-pagination",
               clickable: true,
           },
           breakpoints: {
           640: {
               slidesPerView: 1,
               spaceBetween: 20,
           },
           768: {
               slidesPerView: 2,
               spaceBetween: 30,
           },
           1024: {
               slidesPerView: 3,
               spaceBetween: 30,
           },
       },
   });
}

function initializeCounterRANDOMID() {
    const options = {};

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Only initialize the counter if the element is in view
                VanillaCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    document.querySelectorAll('.counter-RANDOMID .fw-bold').forEach(counterElement => {
        observer.observe(counterElement);
    });
}

function VanillaCounter(targetElement) {
    // Your counter logic goes here
    // You can use the data attributes on the targetElement to get the counter configuration
    // For example:
    // const startAt = parseInt(targetElement.dataset.startAt);
    // const endAt = parseInt(targetElement.dataset.endAt);
    // const time = parseInt(targetElement.dataset.time);
    // const delay = parseInt(targetElement.dataset.delay);
    // ...

    // For demonstration purposes, a simple counter logic is provided:
    let count = 0;
    const endAt = parseInt(targetElement.dataset.endAt);
    const increment = 1;

    const counterInterval = setInterval(() => {
        if (count <= endAt) {
            targetElement.textContent = count;
            count += increment;
        } else {
            clearInterval(counterInterval);
        }
    }, 20);
}

// Call the initializeCounterRANDOMID function when the DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    initializeCounterRANDOMID();
});

document.addEventListener('DOMContentLoaded', () => {
    const navLinkEls = document.querySelectorAll('.nav-link');
    const windowPathname = window.location.pathname;

    navLinkEls.forEach(navLinkEl => {
        const navLinkPathname = new URL(navLinkEl.href).pathname;

        // Add condition for the "About Us" page
        if (
            (windowPathname === navLinkPathname) || 
            (windowPathname === '/index.html' && navLinkPathname === '/')
        ) {
            navLinkEl.classList.add('active');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Select elements with data-aos attribute
    const elementsWithDataAos = document.querySelectorAll('[data-aos]');

    // Add data-aos-duration attribute with a value of 1000 to each element
    elementsWithDataAos.forEach(element => {
        element.setAttribute('data-aos-duration', '1000');
    });
});
