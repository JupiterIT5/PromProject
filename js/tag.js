const tag = document.querySelectorAll('.section__search--tag')

tag.forEach((active_tag) => {
    active_tag.addEventListener('click', () => {
        active_tag.classList.toggle('active')
    })
})