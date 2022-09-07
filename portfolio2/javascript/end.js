const arrow = document.querySelector('.arrow');
function scrollToTheTop() {
    arrow.addEventListener('click', ()=>{
        window.scrollTo({
            top:0,
            left:0,
            behavior:"smooth",
        })
    })
}
scrollToTheTop();
const sect2 = document.querySelector('.reveal2')
const sect3 = document.querySelector('.reveal3')

window.addEventListener("scroll", ()=>{
    const {scrollTop,clientHeight} =document.documentElement;
    const topElementToTopViewport =sect2.getBoundingClientRect().top;
    const topElementToTopViewport2 =sect3.getBoundingClientRect().top;



    if (scrollTop > ((scrollTop+topElementToTopViewport)).toFixed()-clientHeight*0.5){
        sect2.classList.add("reveal-visible");
    }
    if (scrollTop > ((scrollTop+topElementToTopViewport2)).toFixed()-clientHeight*0.5){
        sect3.classList.add("reveal-visible");

}})


