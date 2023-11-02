const loadmore = document.querySelector('#loadmore');
const freelancerCard = document.querySelectorAll('.freelancer-card-display');
let index = 0;
loadmore.addEventListener('click', function(){
        for (let i = index; i < index+3; i++) {
            if (i==freelancerCard.length) {
                return true;
            }
            freelancerCard[i].style.display = "flex"
        }
        index+=3;
});
