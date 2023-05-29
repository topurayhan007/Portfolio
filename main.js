// import bootstrap from "bootstrap"

// const navLinks = document.querySelectorAll('.nav-link')
// const menuToggle = document.getElementById('toggleMobileMenu')
// const bsCollapse = new bootstrap.collapse(menuToggle)
// navLinks.forEach((l) => {
//     l.addEventListener('click', () => { bsCollapse.toggle() })
// })

let holder = document.getElementById("hero");

let gs = 25;

window.onload = () => {
  for (let i = 0; i < gs; i++) {
    for (let j = 0; j < gs; j++) {
      let dot = document.createElement("div");
      dot.classList.add("dot");
      dot.style.animationDelay = `${Math.sin(i * j) / 2}s`;
      holder.appendChild(dot);
    }
  }
};

let preloader = document.getElementById("preloader");
let content = document.getElementById("content");

document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    content.classList.add("d-none");
    document.querySelector("#preloader").style.visibility = "visible";
  } else {
    /* preloader.classList.add("d-none");
    content.classList.remove("d-none"); */
    preloader.classList.add("fade-out");
    setTimeout(function () {
      preloader.classList.add("d-none");
      content.classList.remove("d-none");
      document.getElementById("preloaderLogo").classList.add("zoomIn");
    }, 300);
  }
};
