console.log("diewydewfew");

let btnToogle = document.getElementById('toggle-side-bar'); // bouton pour reduir et agrandir la barre de navigation

btnToogle.addEventListener('click', ()=>{
    // fonction pour changer l'état
    let sideNavContainer = document.querySelector('.aside-nav');

    sideNavContainer.classList.toggle('reduced-nav');
    let cibles = document.querySelectorAll(".aside-nav > .section-title, .aside-nav > .item-container"); // elements à suprimer
    for(let i=0; i<cibles.length; i++){
        cibles[i].classList.toggle('non-present');
    }

    
    // on ajuste aussi le grid hahahah c'est bizarre
    document.querySelector('.main-container').classList.toggle('ajusted-main-container');

    if(sideNavContainer.classList.contains('reduced-nav')){
        btnToogle.innerText = "Options";
        // on vas aussi ajuster la position du bouton toggle (agrandir/reduire)
        btnToogle.style.margin = "2px";
        btnToogle.style.marginLeft = "auto";
    }else{
        btnToogle.innerText = "Réduire";
        btnToogle.style.marginLeft = "auto";
    }
});