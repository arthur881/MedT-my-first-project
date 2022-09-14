/*PAGE ABONNEMENTS*/

/*TOGGLE MODAL-TEE*/
const openZone = document.querySelectorAll('.t-card');
const modal_tee_container = document.getElementById('modal_tee_container')
const closeZone = document.getElementById('close')

const modalImg = document.getElementById("modalImg");
const modalTitle = document.getElementById("modalTitle");
const modalTxt = document.getElementById("modalTxt");
const modalPrice = document.getElementById("modalPrice");




openZone.forEach(function(openItem) {
    openItem.addEventListener('click', function(){
        modal_tee_container.classList.add('show');
        if (openItem == openZone.item(1)){/*.item est une methode pour donner la place d'un item dans une nodelist */

            modalImg.src= "img/Tshirts/THG.jpg";
            modalTitle.innerHTML = 'T-shirt connecté';
            modalTxt.innerHTML = 'T-shirt unisexe';
            modalPrice.innerHTML = '59,99€';

        }else if (openItem == openZone.item(2)){

            modalImg.src= "img/Tshirts/DHN.jpg";
            modalTitle.innerHTML = 'Débardeur connecté';
            modalTxt.innerHTML = 'Débardeur pour homme';
            modalPrice.innerHTML = '49,99€';

        }else if (openItem == openZone.item(3)){

            modalImg.src= "img/Tshirts/MHN.jpg";
            modalTitle.innerHTML = 'T-shirt manche longues connecté';
            modalTxt.innerHTML = 'T-shirt manche longue unisexe';
            modalPrice.innerHTML = '64,99€';

        }else {

            modalImg.src= "img/Tshirts/DFN.jpg";
            modalTitle.innerHTML = 'Debardeur connecté';
            modalTxt.innerHTML = 'Debardeur pour femme';
            modalPrice.innerHTML = '49,99€';
            
        }
    })
})


closeZone.addEventListener('click', function() {
    modal_tee_container.classList.remove('show');
})



/*HOVER T-SHIRTS*/

/*variabilisation des petits carrés de couleur, ils sont placé dans une nodeList */
const ptiCarre = document.querySelectorAll(".lilSqare");
const imgFront = document.getElementById("big-one");



/*pour chaque carré de la liste on ajoute un ecouteur d'event a l'entree de la souris */
ptiCarre.forEach(function(item) {
    item.addEventListener('mouseenter', function() {


        /*ces conditions changent la variable imgFront pour assigner le bon tshirt dans la bonne case*/ 
        if (item.classList.contains('c2')){
            const imgFront = document.getElementById("big-two");

            /*selon la valeur de imgfront, ce sera la bonne image qui changera*/
            if (item.classList.contains('white')){
                /*variabilisation de la grosse img pour la changer par la couleur du petit carré */
                imgFront.src = "img/Tshirts/THBLA.jpg";
            }
            else if(item.classList.contains('grey')){
                imgFront.src = "img/Tshirts/THG.jpg";
            }
            else if(item.classList.contains('blue')){
                imgFront.src = "img/Tshirts/THBLE.jpg";
            }
            else{
                imgFront.src = "img/Tshirts/THN.jpg";
            }
        }


        else if (item.classList.contains('c3')){
            const imgFront = document.getElementById("big-three");

            if (item.classList.contains('white')){
                imgFront.src = "img/Tshirts/DHBLA.jpg";
            }
            else if(item.classList.contains('grey')){
                imgFront.src = "img/Tshirts/DHG.jpg";
            }
            else if(item.classList.contains('blue')){
                imgFront.src = "img/Tshirts/DHBLE.jpg";
            }
            else{
                imgFront.src = "img/Tshirts/DHN.jpg";
            }
        }


        else if (item.classList.contains('c4')){
            const imgFront = document.getElementById("big-four");

            if (item.classList.contains('white')){
                imgFront.src = "img/Tshirts/MHBLA.jpg";
            }
            else if(item.classList.contains('grey')){
                imgFront.src = "img/Tshirts/MHG.jpg";
            }
            else if(item.classList.contains('blue')){
                imgFront.src = "img/Tshirts/MHBLE.jpg";
            }
            else{
                imgFront.src = "img/Tshirts/MHN.jpg";
            }
        }


        else{
            if (item.classList.contains('white')){
                imgFront.src = "img/Tshirts/DFBLA.jpg";
            }
            else if(item.classList.contains('grey')){
                imgFront.src = "img/Tshirts/DFG.jpg";
            }
            else if(item.classList.contains('blue')){
                imgFront.src = "img/Tshirts/DFBLE.jpg";
            }
            else{
                imgFront.src = "img/Tshirts/DFN.jpg";
            }
        }

    })
})

/*BOOSTER D'ABONNEMENTS */
const addBtn = document.querySelectorAll('.add-btn');
const supprBtn = document.getElementById('supprBtn');
let show = document.querySelectorAll('.choices');
const price = document.getElementById('price');
// const wrapper = document.getElementById('choices-wrapper');
const op1 = document.getElementById('choix1');
const op2 = document.getElementById('choix2');
const op3 = document.getElementById('choix3');
const op4 = document.getElementById('choix4');
const op5 = document.getElementById('choix5');
const op6 = document.getElementById('choix6');
var total = 0;

addBtn.forEach(function(addedItem){
    addedItem.addEventListener('click', function(){

            if (addedItem.checked == true && addedItem == addBtn.item(0)){

                
                op1.classList.toggle('active');
                total = total + 1;
                
                

            }else if(addedItem.checked == false && addedItem == addBtn.item(0)){

                
                op1.classList.remove('active');
                total = total - 1;



            }else if(addedItem.checked == true && addedItem == addBtn.item(1)){

                
                op2.classList.add('active');
                total = total + 2;



            }else if(addedItem.checked == false && addedItem == addBtn.item(1)){

                
                op2.classList.remove('active');
                total = total - 2;



            }else if(addedItem.checked == true && addedItem == addBtn.item(2)){

                
                op3.classList.add('active');
                total = total + 3;


            }else if(addedItem.checked == false && addedItem == addBtn.item(2)){

                
                op3.classList.remove('active');
                total = total - 3;



            }else if(addedItem.checked == true && addedItem == addBtn.item(3)){

                
                op4.classList.add('active');
                total = total + 4;

            }else if(addedItem.checked == false && addedItem == addBtn.item(3)){

                
                op4.classList.remove('active');
                total = total - 4;



            }else if(addedItem.checked == true && addedItem == addBtn.item(4)){

                
                op5.classList.add('active');
                total = total + 5;

            }else if(addedItem.checked == false && addedItem == addBtn.item(4)){

                
                op5.classList.remove('active');
                total = total - 5;



            }else if(addedItem.checked == true && addedItem == addBtn.item(5)){

                
                op6.classList.add('active');
                total = total + 6;

            }else if(addedItem.checked == false && addedItem == addBtn.item(5)){

                
                op6.classList.remove('active');
                total = total - 6;



            }
        price.textContent = total;

    })

})

supprBtn.addEventListener('click', function(){
    show.forEach(function(item){
        item.classList.remove('active');
        total = 0;
    })
    price.textContent = total;
})







// console.log(wrapper);
