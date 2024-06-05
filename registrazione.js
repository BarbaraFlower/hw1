
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
function controllo_registrazione(event){
  const nome_user=document.querySelector('#nome');
  const value_nome=encodeURIComponent(nome_user.value)  
  if(value_nome.length== 0){
      event.preventDefault();
      console.log('campo mancante');
      const mostra_mancanza_nome=document.querySelector('#nome_user');
      mostra_mancanza_nome.classList.remove('hidden');
  }
  
  const cognome_user=document.querySelector('#cognome');
  const value_cognome=encodeURIComponent(cognome_user.value)  
  if(value_cognome.length== 0){
      event.preventDefault();
      console.log('campo mancante');
      const mostra_mancanza_cognome=document.querySelector('#cognome_user');
      mostra_mancanza_cognome.classList.remove('hidden');
  }
  const input_mail=document.querySelector('#email');
  const value_mail=encodeURIComponent(input_mail.value)  
      if(value_mail.length== 0){
          event.preventDefault();
          console.log('campo mancante');
          const mostra_mancanza_mail=document.querySelector('#mail_user');
          mostra_mancanza_mail.classList.remove('hidden');
      }
  const input_data=document.querySelector('#data');
  const value_data=encodeURIComponent(input_data.value)  
      if(value_data.length== 0){
          event.preventDefault();
          console.log('campo mancante');
          const mostra_mancanza_data=document.querySelector('#data_user');
          mostra_mancanza_data.classList.remove('hidden');
      }


  const input_password=document.querySelector('#password');
  const value_password=encodeURIComponent(input_password.value)  
      if(value_password.length== 0){
          event.preventDefault();
          console.log('campo mancante');
          const mostra_mancanza_password=document.querySelector('#password_user');
          mostra_mancanza_password.classList.remove('hidden');
      }
  const input_conferma=document.querySelector('#conferma');
   const value_conferma=encodeURIComponent(input_conferma.value)  
      if(value_conferma.length== 0){
          event.preventDefault();
          console.log('campo mancante');
          const mostra_mancanza_conferma=document.querySelector('#conferma_user');
          mostra_mancanza_conferma.classList.remove('hidden');
      }
  
}   

const registrazione = document.querySelector('#registrazione');
registrazione.addEventListener('submit', controllo_registrazione);