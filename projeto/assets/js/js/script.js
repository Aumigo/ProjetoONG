function menu() {
  const menuBtn = document.querySelector(".js-menu-mobile");
  const navMobile = document.querySelector(".js-nav-mobile");

  menuBtn.addEventListener("click", function () {
    navMobile.classList.toggle("active");
    menuBtn.classList.toggle("active");
  });
}

function slider() {
  const prevBtn = document.querySelector(".js-btn-anterior");
  const nextBtn = document.querySelector(".js-btn-proximo");
  const scrollAnimals = document.querySelector(".js-scroll-animals");

  prevBtn.addEventListener("click", function () {
    const cards = document.querySelectorAll(".js-card");
    cards[cards.length - 1].classList.add("anima-previous");
    scrollAnimals.insertBefore(cards[cards.length - 1], scrollAnimals.firstChild);

    setTimeout(() => {
      cards.forEach(card => {
        card.classList.remove("anima-previous");
      });
    }, 1000);
  });

  nextBtn.addEventListener("click", function () {
    const cards = document.querySelectorAll(".js-card");
    cards[0].classList.add("anima-next");

    setTimeout(() => {
      scrollAnimals.appendChild(cards[0]);
      cards.forEach(card => {
        card.classList.remove("anima-next");
      });
    }, 1000);
  });
}

function scrollAnimation() {
  const elements = document.querySelectorAll(".js-scroll");
  const offset = 0.7 * window.innerHeight;

  function animateElements() {
    elements.forEach(element => {
      if (element.getBoundingClientRect().top - offset < 0) {
        element.classList.add("anima-scroll");
      }
    });
  }

  animateElements();
  window.addEventListener("scroll", animateElements);
}

function numberScroll() {
  const numbers = document.querySelectorAll(".js-number");
  const section = document.querySelector(".numeros");
  const offset = 0.7 * window.innerHeight;

  if (section.getBoundingClientRect().top - offset < 0) {
    numbers.forEach(number => {
      const target = +number.innerText;
      const increment = Math.floor(target / 20);
      let current = 0;

      const interval = setInterval(() => {
        current += increment;
        number.innerText = current;

        if (current > target) {
          number.innerText = target;
          clearInterval(interval);
        }
      }, 50);
    });

    window.removeEventListener("scroll", numberScroll);
  }
}

menu();
slider();
scrollAnimation();
window.addEventListener("scroll", numberScroll);
