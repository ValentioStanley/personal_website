// Scroll card horizontally by clicking left and right button

const LBtn = [...document.querySelectorAll('#left')];
const RBtn = [...document.querySelectorAll('#right')];
const scrollCard = [...document.querySelectorAll('#scrollCard')];

scrollCard.forEach((item,i)=>{
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    RBtn[i].addEventListener('click', () => {
        // item.scrollLeft += containerWidth;
        // angka tersebut itu ukuran width atau bisa ukuran sesuai dengan card jika mau geser ke satu kotak
        item.scrollLeft += 320;
    })
    LBtn[i].addEventListener('click', () => {
        // item.scrollLeft -= containerWidth;
        item.scrollLeft -= 320;
    })
})