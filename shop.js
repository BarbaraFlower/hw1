//PRODOTTI
function prodotti(event){
    const element = document.querySelector('#barra div');
    element.classList.remove('hidden')
}

function rprodotti(event){
    const element = document.querySelector('#barra div');
    element.classList.add('hidden')
}


const element = document.querySelector('#prodotto');
element.addEventListener('mouseover', prodotti);
element.addEventListener('mouseleave', rprodotti);



//CONCORSO
function vinci(event){
    const elem = document.querySelector('#vinciconc');
    elem.classList.remove('hidden')
}

function rvinci(event){
    const elem = document.querySelector('#vinciconc');
    elem.classList.add('hidden')
}


const elem = document.querySelector('#concorso');
elem.addEventListener('mouseover', vinci);

elem.addEventListener('mouseleave', rvinci);

//MENU
function showMenu(event){
    const menu = document.querySelector('#showmenu');
    menu.classList.remove('hidden');
    const sez = document.querySelector('#centrale');
    sez.classList.add('hidden');
    event.currentTarget.removeEventListener('click', showMenu);
    event.currentTarget.addEventListener('click', hideMenu);
    
    }
    
    const menu = document.querySelector('#menu');
    menu.addEventListener('click', showMenu);
    
    function hideMenu(event){
            const menu = document.querySelector('#showmenu');
            menu.classList.add('hidden');
            const sez = document.querySelector('#centrale');
            sez.classList.remove('hidden');
            event.currentTarget.removeEventListener('click',hideMenu);
            event.currentTarget.addEventListener('click',  showMenu);
    
    }


//PRODOTTI DATABASE

function createImage(src) {
    const image = document.createElement('img');
    image.src = src;
    return image;
  }
  
  function onThumbnailClick(event) {
    console.log('ciaoThum');
    const image = createImage(event.currentTarget.src);
    document.body.classList.add('no-scroll');
    const modalView = document.querySelector('#modal-view');
    modalView.style.top = window.pageYOffset + 'px';
    modalView.appendChild(image);
    modalView.classList.remove('hidden');
    modalView.addEventListener('click', onModalClick);
    
  }
  
  function onModalClick() {
    const modalView = document.querySelector('#modal-view');
    document.body.classList.remove('no-scroll');
    modalView.classList.add('hidden');
    modalView.innerHTML = '';
  }


function OnJson(json){

    const lista= document.querySelector('.shop');
    lista.innerHTML='';

    const lunghezza=json.length;
    if(lunghezza == 0){
        return;
    }

    for(let i=0;i<lunghezza;i++){
            const prodotto_corrente = json[i];

            const titolo=document.createElement('h4');
            const gusto = document.createElement('p');
            const image=document.createElement('img');
            const info=document.createElement('div');
            const ingredienti = document.createElement('p');
            const container=document.createElement('div');

            info.dataset.index= prodotto_corrente.id;

            image.src= prodotto_corrente.img;
            titolo.textContent= prodotto_corrente.nome;
            gusto.textContent =  'Gusto  '+prodotto_corrente.gusto;
            ingredienti.textContent = prodotto_corrente.testo_ingredienti;
            
            info.appendChild(titolo);
            info.appendChild(gusto);
            container.appendChild(image);
            container.appendChild(info);
            lista.appendChild(container);

            info.classList.add('info');
            container.classList.add('colonna');
            image.classList.add('immagine_prodotti');

        image.addEventListener('click', onThumbnailClick);


        fetch("mostra_like.php?id_prodotto="+encodeURIComponent(info.dataset.index)).then(OnResponse).then(MostraLikeJson);
    }

}


function MostraLikeJson(json){

    const prodotto = document.querySelectorAll('.info');
    const cuore = document.createElement("span");
    cuore.classList.add('fa');
    if(json[0].img == "like"){
        cuore.classList.add('fa-heart');
    } 
    else{
        cuore.classList.add('fa-heart-o');
    }


    for(p of prodotto){
        if(p.dataset.index == json[0].id)
            p.appendChild(cuore);
    }
    cuore.addEventListener("click", fetchRimuoviAggiungilike);
}

function fetchRimuoviAggiungilike(event){
    let indice = event.currentTarget.parentNode;
    const res = fetch("like.php?id_prodotto="+encodeURIComponent(indice.dataset.index)).then(OnResponse).then(fetchLikeJson);
    console.log(res);
    cuore=event.currentTarget;
   
        if(cuore.classList.contains('fa-heart')){
            cuore.classList.remove('fa-heart');
            cuore.classList.add('fa-heart-o');
        }
        else{
            cuore.classList.remove('fa-heart-o');
            cuore.classList.add('fa-heart');
        }

}

function fetchLikeJson(json){
    console.log(json);
}

function OnResponse(response){ 
    return response.json();
}

fetch("prodotti.php").then(OnResponse).then(OnJson);

