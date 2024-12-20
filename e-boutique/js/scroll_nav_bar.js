// ce fichier est présent pour gérer la dispositions de la nav-bar (header )
console.log("nav bar");
document.addEventListener('scroll', (e)=>{
    console.log("scrolling");
    let navBar = document.querySelector('.nav-bar');
    let sideBar= document.querySelector('.aside-nav');
    console.log("client heigh: ", navBar.clientHeight);
    if(window.scrollY > Math.max(navBar.clientHeight, 100) ){
        navBar.classList.add('fixed-top');
        sideBar.classList.add('aside-nav-fixed');
    }else{
        navBar.classList.remove('fixed-top');
        sideBar.classList.remove('aside-nav-fixed');
    }
});