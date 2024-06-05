//Tendine

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

///////////////////////////////////////////////////////
