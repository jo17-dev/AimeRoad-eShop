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
    let submitBtn = createFormItem("Valider", "submit");
        submitBtn.className = "submit-btn";

    form.setAttribute("method", "get");
    form.setAttribute("action", "url_ffcdedd");

    for(let i=0; i< inputsNumbers; i++){
        form.appendChild(createFormItem(targetNames[i] || targetNames[0], inputsType[i] || inputsType[inputsType.length -1], placeholder[i] || placeholder[placeholder.length - 1]));
    }

    form.appendChild(submitBtn);

    return form;
}


// fonction qui affiche un po-up de modification à l'utilisateur dépendement du champ qu'il veut modifier
const afficherPopUpUser = (champAModifier)=>{
    if(champAModifier == "nom"  || champAModifier == "prenom" || champAModifier == "email" ){
        afficher(
            "Modifier mon "+champAModifier,
            createFormElement([champAModifier == "email" ? champAModifier : "text"], [champAModifier],
                2, 
                ["Entrer votre "+champAModifier,"re-entrez votre "+champAModifier]
            )
        );
    }else if(champAModifier == "password"){   
        afficher(
            "Modifier mon mot de passe",
            createFormElement(["password"], 
                [champAModifier], 
                3, 
                ["Entrez l'ancien mot de passe", "entrez le nouveau mot de passe","Confirmez le mot de passe"]
            )
        );
    }
}

// fonction pour le po-up de supression de la confirmation
const afficherPopUpSupression = ()=>{
    // let contenue = document.createElement("p");
    // contenue.innerText = "Voulez-vous vraiment suprimer votre compte ?"
    afficher(
        "Confirmation de suppresion du compte",
        createFormElement(
            [], 
            [], 
            0, 
            []
        )
    );
}
