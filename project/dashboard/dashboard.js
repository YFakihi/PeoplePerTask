const search = document.querySelector('.search')
const search_affiche = document.querySelector('.search_icon')
search_affiche.addEventListener('click', () => {
    search.classList.toggle('active')
})
const news = document.querySelector('.new')
const notification = document.querySelector('.notification')
notification.addEventListener('click', () => {
    news.classList.toggle('active')
})

const sidebar = document.querySelector(".side")
const opens = document.querySelector('.open')
const closes = document.querySelector('.close')
opens.addEventListener('click', () => {
    sidebar.classList.toggle('menu')
})
closes.addEventListener('click', () => {
    sidebar.classList.remove('menu')
})


