let burger = document.querySelector('.header__row-burgerMenu')
let menu = document.querySelector('.header__row-menu')
let catalogBurger = document.querySelector('.catalog__genre-burger')
let catalogMenu = document.querySelector('.catalog__genre-menu')
let profileBurger = document.querySelector('.profile-mobile-right')
let profileMenu = document.querySelector('.profile-mobile-select')

burger.addEventListener("click", ()=>{
    menu.classList.toggle('none')
})

catalogBurger.addEventListener("click", ()=>{
    catalogMenu.classList.toggle('none')
    console.log(1)
})

profileBurger.addEventListener("click", ()=>{
    profileMenu.classList.toggle('profileNone')
    console.log(1)
})