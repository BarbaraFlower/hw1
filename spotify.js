
//SPOTIFY

  function onJson(json)
  {
    console.log(json)
  }
  
  function onResponse(response)
  {
    return response.json();
  }
  
function funzionePodcast(){
    fetch('spotify.php').then(onResponse).then(onJson);
}
