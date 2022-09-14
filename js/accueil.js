/*PAGE ACCUEIL*/

/*TOGGLE BETA-MODAL*/
const open = document.getElementById('open');
const modal_beta_container = document.getElementById('modal_beta_container');
const close = document.getElementById('close');

open.addEventListener('click', function() {
    modal_beta_container.classList.add('show');
});

close.addEventListener('click', function() {
    modal_beta_container.classList.remove('show');
});




/*FORM BETA*/
let form = document.querySelector('form');

let firstName = document.querySelector('#nom');
let lastName = document.querySelector('#prenom');
let email = document.querySelector('#email');



//placement de l'ecouteur d'event a l'envoi du form
form.addEventListener('submit', function(event){
    //event.preventDefault();


    //variabiliastion des msg erreur et valid
    let errorContainer = document.querySelector('.msg-error');
    let errorList = document.querySelector('.msg-error ul');

    errorList.innerHTML = "";
    errorContainer.classList.remove('visible')

    //verif du nom
    if (firstName.value.length < 3) {
        event.preventDefault();

        //si le nom est < a 3 alors ajouter visible le container d'erreur & enlever success au champ 'nom'
        errorContainer.classList.add('visible');
        firstName.classList.remove('success');

        //création de la liste pour afficher le différentes erreurs de saisies
        let err = document.createElement('li');
        err.innerText = "Le champ Nom doit contenir plus de 2 caractères";
        errorList.appendChild(err);
    }else{
        //si le nom > 3 alors ajouter la class 'success' au champ nom
        nom.classList.add('success');
    }

    if (lastName.value.length < 2) {
        event.preventDefault();

        errorContainer.classList.add('visible');
        lastName.classList.remove('success');

        let err = document.createElement('li');
        err.innerText = "Le champ Prenom doit contenir plus de 1 caractères";
        errorList.appendChild(err);
    }else{
        lastName.classList.add('success');
    }


    //si l'Email est vide...
    if(email.value == '') {
        event.preventDefault();

        errorContainer.classList.add('visible');
        email.classList.remove('success');

        let err = document.createElement('li');
        err.innerText = "Le champ Email ne peut rester vide";
        errorList.appendChild(err);
    }else{
        email.classList.add('success');
    }

    //creation de la variable pour afficher le msg de valid
    let successContainer = document.querySelector('.msg-sucess');
    successContainer.classList.remove('visible');

    //condition pour valider l'envoi du form et afficher le msg de valid
    if(
        nom.classList.contains('success') &&
        lastName.classList.contains('success') &&
        email.classList.contains('success')
    ){
        successContainer.classList.add('visible')
    }

})
form.addEventListener('keyup',function(){
    localStorage.setItem("firsName", firstName.value);
    localStorage.setItem("lastName", lastName.value);
    localStorage.setItem("email", email.value);
})
var localFristname = localStorage.getItem('firsName');
var localLastname = localStorage.getItem('lastName');
var localemail = localStorage.getItem('email');

// console.log(localFristname, localLastname, localemail);

if(localFristname !== null && localFristname !== '') {
    firstName.value=localFristname;
}else{
    console.log('local storage vide1');
}
if(localLastname !== null && localLastname !== '') {
    lastName.value=localLastname;
}else{
    console.log('local storage vide2');
}
if(localemail !== null && localemail !== '') {
    email.value=localemail;
}else{
    console.log('local storage vide3');
}





//quand on appuie sur reset tous ls msg s'en vont
form.addEventListener('reset', function(event){
    //je n'ai pas trouver d'autre solutions que de revariabiliser ici tous les messages
    let errorContainer = document.querySelector('.msg-error');
    let successContainer = document.querySelector('.msg-sucess');


    //disparition des messages d'erreur et de valid plus la couleur des champs valides
    errorContainer.classList.remove('visible')
    successContainer.classList.remove('visible')
    firstName.classList.remove('success');
    lastName.classList.remove('success');
    email.classList.remove('success');
})


