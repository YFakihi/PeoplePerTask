const quistion = document.querySelectorAll('.question')
const faq = document.querySelectorAll('.faq')
for (let i=0 ; i<quistion.length;i++){
    quistion[i].addEventListener('click', function () {
        faq[i].classList.toggle('active')
        for (let g = 0; g < quistion.length; g++) {
        if (g != i) {
            faq[g].classList.remove('active')
        }
    }
    })

}
//read move
// const modal = document.querySelector('.modal')
// const open = document.querySelector('.hero-button')
// const close = document.querySelector('.close')
// open.addEventListener('click',() =>{
//     modal.showModal();
// })
// close.addEventListener('click',()=>{
//     modal.close();
// })

