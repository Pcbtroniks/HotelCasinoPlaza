const aside = document.querySelector('#aside');
const lateralMenu = document.querySelector('#lateral-menu');
const closeNavBtn = document.querySelector('#closeNavBtn');
const openNavBtn = document.querySelector('#openNavBtn');
const openNavBtnMovile = document.querySelector('#openNavBtnMovile');

openNavBtn.addEventListener('click', openNav);
openNavBtnMovile.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);

function openNav(){
    aside.classList.add('w-full');
    document.body.classList.add('overflow-hidden');
    lateralMenu.classList.add('w-72');
    lateralMenu.classList.remove('w-0');

    document.addEventListener('click', handleClickOutside);

}
function closeNav(){
    aside.classList.remove('w-full');
    document.body.classList.remove('overflow-hidden');
    lateralMenu.classList.remove('w-72');
    lateralMenu.classList.add('w-0');

    document.removeEventListener('click', handleClickOutside);

}

function handleClickOutside(event) {
    // Comprobar si el clic se realizó fuera del menú lateral y si el menú está abierto
    if (!lateralMenu.contains(event.target) && !openNavBtn.contains(event.target) && !openNavBtnMovile.contains(event.target)) {
        closeNav();
    }
}