function myFunction(x) {
	x.classList.toggle('change');
}

const burgerMenu = document.getElementsByClassName('hamburger')[0]
const navLinks = document.getElementsByClassName('nav-links')[0]

burgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active')
})
