const quistion = document.querySelectorAll('.quistion')
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