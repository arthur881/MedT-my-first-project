//sur la frise rajouter une div avec le reste du txt et lui mettre un height de 0
//au click sur "lire plus" faire apparaitre la div en lui mettant une height auto 
const titreAnim = document.querySelector("#titreAnim");

setTimeout(function(){
    titreAnim.classList.add('transition-titre');
}, 200)