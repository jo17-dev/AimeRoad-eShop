// contient une fonction pour afficher le pop-up au click sur un produit

const afficher =( headerText="Continuez votre action", form=document.createElement("form")) => {
    // struturation de la page (step 1)
    let wholepageWrapper = document.createElement("div");
        wholepageWrapper.setAttribute("class", "whole-page-mapper");

    let container = document.createElement("div");
        container.setAttribute("class", "pop-up-container");
    let title = document.createElement("h1");
        title.innerText = headerText;

    let cancelBtn = document.createElement("img");
        cancelBtn.src = "../img/cancel-icon.webp";
        cancelBtn.className = "cancel-icon";

    
    cancelBtn.style.top = parseInt(document.body.style.height/2 - form.style.height - form.style.outlineOffset - cancelBtn.style.height - 20) + "px";
    cancelBtn.style.right = parseInt(document.body.style.width/2 - form.style.width - form.style.outlineOffset - cancelBtn.style.width - 20) + "px";

    // step 2: ajout des évènements:
    cancelBtn.addEventListener('click', ()=>{
        wholepageWrapper.style.display = "none";
    });

    // assemblage du niveau final;

    container.appendChild(cancelBtn);
    container.appendChild(title);
    container.appendChild(form);

    wholepageWrapper.appendChild(container);

    document.body.appendChild(wholepageWrapper);
    
}

const createFormItem =(name, type="text", placeholder="", required=false)=>{
    let result = document.createElement("input");

    result.setAttribute("class", "input-item");
    result.setAttribute("type", type);
    result.setAttribute("name", name);
    result.setAttribute("placeholder", placeholder)
    return result;

} 

const createFormElement = (inputsType=["text"], targetNames=["nom"] ,inputsNumbers=1, placeholder=["entrez la valeur"], required=[])=>{
    let form = document.createElement("form");

    form.setAttribute("method", "get");
    form.setAttribute("action", "url_ffcdedd");

    for(let i=0; i< inputsNumbers; i++){
        form.appendChild(createFormItem(targetNames[i] || targetNames[0], inputsType[i] || inputsType[inputsType.length -1], placeholder[i] || placeholder[placeholder.length - 1]));
    }

    form.appendChild(createFormItem("Valider", "submit"));

    return form;
}



// fonctions à utiliser
const modificationUniquePopUp = (champAModifier)=>{
    afficher("Modifier mon "+champAModifier, createFormElement(["text"], [champAModifier], 2, ["Entrer votre nom", "re-entrez votre nom"]));
}