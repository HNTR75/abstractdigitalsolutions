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
