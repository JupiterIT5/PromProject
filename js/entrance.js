const btn = document.querySelector('.btn__entrance')
const menu = document.querySelector('.entrance__menu')
const mobile_btn = document.querySelector('.header__profile--mobile')

if (btn) {
btn.addEventListener('click', () => {
    menu.classList.toggle('active')
})
}

if (mobile_btn) {
    mobile_btn.addEventListener('click', () => {
        menu.classList.toggle('active')
    })
}