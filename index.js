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



//IMMAGINI PAVESINI
function cambiapavesino(event){
    const image = event.currentTarget;
    image.src = 'https://www.pavesini.it/wp-content/uploads/2023/07/originali_on.png';
}
const image = document.querySelector('.pavesino [data-index="1"] img');
image.addEventListener("mouseover", cambiapavesino);
function ripristinapavesino(event){
    const image = event.currentTarget;
    image.src = 'https://www.pavesini.it/wp-content/uploads/2023/07/originali_off.png';
}
image.addEventListener("mouseleave", ripristinapavesino);



function cambiapavesino2(event){
    const image2 = event.currentTarget;
    image2.src = '	https://www.pavesini.it/wp-content/uploads/2023/07/cacao_on.png';
}
const image2 = document.querySelector('.pavesino [data-index="2"] img');
image2.addEventListener("mouseover", cambiapavesino2);
function ripristinapavesino2(event){
    const image2 = event.currentTarget;
    image2.src = '	https://www.pavesini.it/wp-content/uploads/2023/07/cacao_off.png';
}
image2.addEventListener("mouseleave", ripristinapavesino2);



function cambiapavesino3(event){
    const image3 = event.currentTarget;
    image3.src = '	https://www.pavesini.it/wp-content/uploads/2023/07/caffe_on.png';
}
const image3 = document.querySelector('.pavesino [data-index="3"] img');
image3.addEventListener("mouseover", cambiapavesino3);
function ripristinapavesino3(event){
    const image3 = event.currentTarget;
    image3.src = 'https://www.pavesini.it/wp-content/uploads/2023/07/caffe_off.png';
}
image3.addEventListener("mouseleave", ripristinapavesino3);



function cambiapavesino4(event){
    const image4 = event.currentTarget;
    image4.src = 'https://www.pavesini.it/wp-content/uploads/2023/07/double_on.png';
}
const image4 = document.querySelector('.pavesino [data-index="4"] img');
image4.addEventListener("mouseover", cambiapavesino4);
function ripristinapavesino4(event){
    const image4 = event.currentTarget;
    image4.src = 'https://www.pavesini.it/wp-content/uploads/2023/07/double_off.png';
}
image4.addEventListener("mouseleave", ripristinapavesino4);

//NUOVA RICETTA
function mostranuovaricetta(event){
    const image = document.createElement('img');
    const titolo=document.createElement('h2');
    const paragrafo=document.createElement('p');
    const link=document.createElement('a');
    const container=document.createElement('div');
    const span_scopri=document.createElement('span');
    const container_principale=document.createElement('div');

    image.src= "https://www.pavesini.it/wp-content/uploads/2023/09/tiramisu-alle-fragole-con-pavesini-listing.jpg";
    titolo.textContent='Tiramisù alle fragole';
    paragrafo.textContent='Tiramisù alle fragole con Pavesini: dolce goloso e rinfrescante';
    link.textContent='SCOPRI';
    link.href='https://www.pavesini.it/ricette/tiramisu-alle-fragole-con-pavesini/';

    const sezione = document.querySelector('#ricettadistagione');
    const contenitore = document.querySelectorAll('.descrizione');

    for(let i =0; i<3; i++ ){
      console.log(contenitore[i]);
      contenitore[i].classList.add('hidden');
    }

    sezione.appendChild(image);
    span_scopri.appendChild(link);
    container.appendChild(titolo);
    container.appendChild(paragrafo);
    container.appendChild(span_scopri);
    container_principale.appendChild(image);
    container_principale.appendChild(container);
    sezione.appendChild(container_principale);

    span_scopri.classList.add("button");
    container.classList.add('box');
    container_principale.classList.add('descrizione');

    button = event.currentTarget;
    button.removeEventListener('click', mostranuovaricetta);
    button.addEventListener('click', rimuoviricetta);
    button.textContent='Torna alle ricette'
}

function rimuoviricetta(event){

    const sezione = document.querySelectorAll('.descrizione');
    for(let i =0; i<3; i++ ){
      console.log(sezione[i]);
      sezione[i].classList.remove('hidden');
    }

    const ricetta = document.querySelector('#ricettadistagione');
    ricetta.innerHTML='';


    button = event.currentTarget;
    button.textContent='Ricetta di Stagione';
    button.addEventListener('click', mostranuovaricetta);
    button.removeEventListener('click', rimuoviricetta);
}


const innescodiv = document.querySelector('#nuovaricetta');
innescodiv.addEventListener('click', mostranuovaricetta);

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



//API VIAGGIO
function clickItinerario(event){
    const itinerario = document.querySelector("#travel2");
    itinerario.classList.remove("hidden");
    const bottone = document.querySelector("#itinerario");
    bottone.classList.add("hidden")
    itinerario.removeEventListener('click', clickItinerario);
}

const itinerario = document.querySelector('#itinerario');
itinerario.addEventListener('click', clickItinerario);

function libera(event){
  event.currentTarget.innerHTML=''; 
}

function OnJsonViaggio(json){
    console.log('json ricevuto');
    console.log(json);

    const sezione=document.querySelector('#testo-view');
    sezione.innerHTML='';

    const day_1 = document.createElement('p');
    const day_2 = document.createElement('p');
    const day_3 = document.createElement('p');
    const day_4 = document.createElement('p');

    day_1.textContent = 'FIRST DAY: '+json.itineraryData.day1;
    day_2.textContent ='SECOND DAY: '+json.itineraryData.day2;
    day_3.textContent = 'THIRD DAY: '+json.itineraryData.day3;
    day_4.textContent = 'FOURTH DAY: '+json.itineraryData.day4;

    const container = document.createElement('div');
    container.classList.add("citta_container");

    
    container.appendChild(day_1);
    container.appendChild(day_2);
    container.appendChild(day_3);
    container.appendChild(day_4);

    sezione.appendChild(container);
    sezione.addEventListener('click', libera);
}

function onResponseViaggio(response){
    return response.json();
}

function FunzioneItinerario(event){
        // Impedisci il submit del form
        event.preventDefault(); //evita che la pagina si ricarichi quando clicco su submit
        // Leggi valore del campo di testo
        const testo_in = document.querySelector('#testo'); // seleziono la casella di testo tramite il suo id
        const city = encodeURIComponent(testo_in.value); // leggo il valore che scrivo nella casella di testo
        console.log('Eseguo ricerca: ' + city);
      
    fetch('itinerario.php').then(onResponseViaggio).then(OnJsonViaggio);
      // Aggiungi event listener al form
      const form = document.querySelector('#travel');
      form.addEventListener('submit', FunzioneItinerario)
      
}     
      

const innesco_ai=document.querySelector('#travel');
innesco_ai.addEventListener('submit', FunzioneItinerario);

//SPOTIFY
function createImage(src) {
  const image = document.createElement('img');
  image.src = src;
  return image;
}

function onThumbnailClick(event) {
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


function onJsonSpotify(json)
{
  
    const library = document.querySelector('#podcast-view');
    library.innerHTML = '';

    if(json.length==0){
      return;
    }
    // Leggi il numero di risultati
    const results = json.items;
    let num_results = results.length;

    // Processa ciascun risultato
    for(let i=0; i<num_results; i++){

      const podcast_corrente = results[i];

      const titolo=document.createElement('h4');
      const image =document.createElement('img');
      const audio = document.createElement('a');
      const container = document.createElement('div');

      image.src= podcast_corrente.images[1].url;
      titolo.textContent= podcast_corrente.name;
      audio.href = podcast_corrente.external_urls.spotify;
      audio.textContent = 'Ascolta il podcast!';

      container.appendChild(image);
      container.appendChild(titolo);
      container.appendChild(audio);
      container.classList.add('container_ricette');
      library.appendChild(container);

      image.addEventListener('click', onThumbnailClick);

    }

    library.addEventListener('click', liberaSpotify);
  }

  function onResponseSpotify(response)
  {
    return response.json();
  }

  function funzionePodcast(event){
    fetch('spotify.php').then(onResponseSpotify).then(onJsonSpotify);
    event.currentTarget.classList.add('hidden');
  }

  const podcast = document.querySelector('#podcast');
  podcast.addEventListener('click', funzionePodcast);

  function liberaSpotify(event){
    event.currentTarget.innerHTML=''; 
    const pulsante = document.querySelector('#podcast')
    pulsante.classList.remove('hidden');
  }


  //NUMERO RICETTA

  function OnJsonRicetta(json){  
  console.log('json ricevuto');
  console.log(json);

  const lunghezza=json.length;

  const id=encodeURIComponent(document.querySelector('#iniziale_id').value);
  console.log(id);

  let i;
  const libreria_ricette=document.querySelector('#visualizza_ricette');
  libreria_ricette.innerHTML='';
  let count=0;


  for(i=0;i<lunghezza;i++){
      const ricetta_corrente=json[i];
      if(ricetta_corrente.id===id){

          count++;
          console.log(ricetta_corrente);
          console.log('id corrispondente');

          const difficoltà =document.createElement('p');
          const image =document.createElement('img');
          const title =document.createElement('p');
          
          difficoltà.textContent='Difficoltà: '+ricetta_corrente.difficulty;
          image.src= ricetta_corrente.image;
          title.textContent = 'Ricetta: '+ricetta_corrente.title;
          
          const info = document.createElement('div');
          const container=document.createElement('div');

          info.appendChild(title);
          info.appendChild(difficoltà);
          container.appendChild(info);
          container.appendChild(image); 
          libreria_ricette.appendChild(container);
          
          info.classList.add('div_info')
          container.classList.add('div_sezione_ricette');
        
      image.addEventListener('click', onThumbnailClick);
          
      }
  }

  console.log(count);

  if(count===0){
      const mancanza=document.createElement('p');
      mancanza.textContent='Non ci sono ricette per questo numero';
      libreria_ricette.appendChild(mancanza);

  }

  libreria_ricette.addEventListener('click', liberaRicetta);
}

function onResponseRicetta(response){
  return response.json();
  
}

function funzioneRicetta(event){
  event.preventDefault();
  const id_input = document.querySelector('#iniziale_id'); // seleziono la casella di testo tramite il suo id
        const id_value = encodeURIComponent(id_input); // leggo il valore che scrivo nella casella di testo
        console.log('Eseguo ricerca: ' + id_value);
  fetch('numeroRicette.php').then(onResponseRicetta).then(OnJsonRicetta);
  const form = document.querySelector('#cerca_ricetta');
  form.addEventListener('submit', funzioneRicetta)
}



const innesco_ricetta=document.querySelector('#cerca_ricetta');
innesco_ricetta.addEventListener('submit', funzioneRicetta);


function liberaRicetta(event){
  event.currentTarget.innerHTML=''; 
}
