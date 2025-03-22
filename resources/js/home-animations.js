import anime from "animejs/lib/anime.es.js";

var tl = anime.timeline({
    easing: "easeOutExpo",
    duration: 300,
});

const typingElement = document.querySelector("#typing-text");

// Add children
tl.add({
    targets: ".logo-svg",
    marginTop: 8,
})
    .add({
        targets: ".nav-element",
        marginTop: 8,
    })
    .add({
        targets: ".nav-toggle-buttons",
        marginTop: 8,
    })
    .add({
        targets: ".main-description",
        opacity: 100,
        easing: "easeInOutQuad",
    })
    .add({
        targets: ".personal-foto",
        opacity: 100,
        easing: "easeInOutQuad",
    })
    .add({
        targets: ".secondary-description",
        opacity: 100,
        easing: "easeInQuad",
    })
    .add({
        targets: ".social-link:nth-child(1)",
        marginTop: -10,
        opacity: 100,
    })
    .add({
        targets: ".social-link:nth-child(2)",
        marginTop: -10,
        opacity: 100,
    })
    .add({
        targets: ".social-link:nth-child(3)",
        marginTop: -10,
        opacity: 100,
    })
    .add({
        targets: ".experience-container",
        translateX: 0,
        opacity: 100,
        easing: "easeOutExpo",
    })
    .add({
        targets: "#skills-container",
        translateX: 0,
        opacity: 100,
        easing: "easeOutExpo",
    });

const elements = document.querySelectorAll(".software");

// Animation keyframes and options
const fadeInUp = [
    { opacity: 0, transform: "translateY(20px)" }, // Start state
    { opacity: 1, transform: "translateY(0)" }, // End state
];

const animationOptions = {
    duration: 1000,
    easing: "ease-out",
    fill: "forwards", // Retain final animation state
};

// Intersection Observer setup
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Trigger animation when element is visible
                entry.target.animate(fadeInUp, animationOptions).onfinish =
                    () => {
                        observer.unobserve(entry.target); // Ensure opacity is at 1 when animation finishes
                    };
            }
        });
    },
    {
        threshold: 0.5, // Adjust to control when the animation triggers (e.g., 0.5 = 50% visible)
    }
);

// Start observing the element
elements.forEach((element) => {
    observer.observe(element);
});

const collabContainer = document.getElementById("collab-container");

// Animation keyframes and options
const fadeInLeft = [
    { opacity: 0, transform: "translateX(20px)" }, // Start state
    { opacity: 1, transform: "translateX(0)" }, // End state
];

const animationOptionsCollab = {
  duration: 1000,
  easing: "ease-out",
  fill: "forwards", // Retain final animation state
};

const observerCollab = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Trigger animation when element is visible
                entry.target.animate(fadeInLeft, animationOptionsCollab).onfinish = () => {
                    observerCollab.unobserve(entry.target); // Ensure opacity is at 1 when animation finishes
                }
            }
        });
    },
    {
        threshold: 0.2, // Adjust to control when the animation triggers (e.g., 0.5 = 50% visible)
    }
);

// Start observing the element
observerCollab.observe(collabContainer);

const contactFormContainer = document.getElementById("contact-form-container");

// Animation keyframes and options
const fadeInRight = [
    { opacity: 0, transform: "translateX(-20px)" }, // Start state
    { opacity: 1, transform: "translateX(0)" }, // End state
];

const animationOptionsContact = {
  duration: 1000,
  easing: "ease-out",
  fill: "forwards", // Retain final animation state
};

const observerContact = new IntersectionObserver(
  (entries) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              // Trigger animation when element is visible
              entry.target.animate(fadeInRight, animationOptionsContact).onfinish = () => {
                observerContact.unobserve(entry.target); // Ensure opacity is at 1 when animation finishes
              }
          }
      });
  },
  {
      threshold: 0.2, // Adjust to control when the animation triggers (e.g., 0.5 = 50% visible)
  }
);

// Start observing the element
observerContact.observe(contactFormContainer);