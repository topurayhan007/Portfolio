const navLinks = document.querySelectorAll('.nav-link')
const menuToggle = document.getElementById('toggleMobileMenu')
const bsCollapse = new bootstrap.Collapse(menuToggle)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { bsCollapse.toggle() })
})
