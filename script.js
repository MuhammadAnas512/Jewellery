// Header scroll effect
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});

// // Testimonial carousel (basic implementation)
// let currentTestimonial = 0;
// const testimonials = document.querySelectorAll(".testimonial");

// function showTestimonial(index) {
//   testimonials.forEach((testimonial, i) => {
//     testimonial.style.display = i === index ? "block" : "none";
//   });
// }

// if (testimonials.length > 0) {
//   showTestimonial(currentTestimonial);

//   setInterval(() => {
//     currentTestimonial = (currentTestimonial + 1) % testimonials.length;
//     showTestimonial(currentTestimonial);
//   }, 3000);
// }

// const icons = document.querySelectorAll('[class^="icon-"]');
// icons.forEach((icon) => {
//   icon.textContent = "●"; // Placeholder dot
// });
