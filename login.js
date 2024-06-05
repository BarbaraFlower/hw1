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

//////////////////////////////////////////////////////
function controllo_login(event){
    const email_user=document.querySelector('#mail');
    const value_email=encodeURIComponent(email_user.value)  
    if(value_email.length== 0){
        event.preventDefault();
        console.log('campo mancante');
        const mostra_mancanza_email=document.querySelector('#email_empty');
        mostra_mancanza_email.classList.remove('hidden');
    }
    
    const password_user=document.querySelector('#password');
    const value_password=encodeURIComponent(password_user.value)  
    if(value_password.length== 0){
        event.preventDefault();
        console.log('campo mancante');
        const mostra_mancanza_password=document.querySelector('#password_empty');
        mostra_mancanza_password.classList.remove('hidden');
    }

    
  }   
  
  const login = document.querySelector('#login');
  login.addEventListener('submit', controllo_login);