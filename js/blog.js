const tousLesBtn = document.querySelectorAll('.cat');
const btnAll = document.getElementById('allCat');
const btnCat1 = document.getElementById('cat1');
const btnCat2 = document.getElementById('cat2');
const btnCat3 = document.getElementById('cat3');


const articles = document.querySelectorAll('.article');
const artCat1 = document.querySelectorAll('.cat1');
const artCat2 = document.querySelectorAll('.cat2');
const artCat3 = document.querySelectorAll('.cat3');



tousLesBtn.forEach(function(item){
    item.addEventListener('click', function() {
        tousLesBtn.forEach(function(removeActive){
            removeActive.classList.remove('active');
        })
    this.classList.add('active');

    if(this.classList.contains('btnCat1')){

        articles.forEach(function(remove){
            remove.classList.remove('active');
        })
        artCat1.forEach(function(add){
            add.classList.add('active');
        })
        
        


    }else if(this.classList.contains('btnCat2')){

        articles.forEach(function(remove){
            remove.classList.remove('active');
        })
        artCat2.forEach(function(add){
            add.classList.add('active');
        })


    }else if(this.classList.contains('btnCat3')){

        articles.forEach(function(remove){
            remove.classList.remove('active');
        })
        artCat3.forEach(function(add){
            add.classList.add('active');
        })


    }else{

        articles.forEach(function(remove){
            remove.classList.add('active');
        })
    }
    })
})

// const addArtBtn = document.querySelector('.addArtBtn');
// const formAddArt = document.querySelector('.formAddArt');



// addArtBtn.addEventListener('click', function(){
//     formAddArt.classList.toggle('show');
//     if (formAddArt.classList.contains('show')){
//         document.getElementById('AddArtIcon').textContent = "close";
//         document.getElementById('AddArtP').textContent = "Annuler";
//     }else{
//         document.getElementById('AddArtIcon').textContent = "add";
//         document.getElementById('AddArtP').textContent = "Nouvel article";
//     }
// })

