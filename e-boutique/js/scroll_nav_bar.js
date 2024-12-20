// ce fichier est présent pour gérer la dispositions de la nav-bar (header )
console.log("nav bar");
document.addEventListener('scroll', (e)=>{
    console.log("scrolling");
    let navBar = document.querySelector('.nav-bar');
    console.log("client heigh: ", navBar.clientHeight);
    if(window.scrollY > Math.max(navBar.clientHeight, 100) ){
        navBar.classList.add('fixed-top');
    }else{
        navBar.classList.remove('fixed-top');
    }
});