function handleScroll() {
    var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;
    var navMenu = document.getElementById('navMenu');
    if (scrollHeight > 0) {
        navMenu.classList.add('scrolled');
    } else {
        navMenu.classList.remove('scrolled');
    }
}
window.addEventListener('scroll', handleScroll);