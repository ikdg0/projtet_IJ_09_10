
// on récupère l'id de l'input et on lui applique l'événement keyup
document.getElementById("searchInput").addEventListener("keyup", (e) => {
  //on récupère le mot tapé, et on met tout en lowercase
  console.log(e)
  let language = e.target.value.toLowerCase();
  console.log(language);
  //on récupère tous les li qui ont tous le même nom de classe et on les mets 
  //dans une Collection
  let CollectionLangage = document.getElementsByClassName("name")
  console.log(CollectionLangage)
  // on boucle sur la taille de la collection 
  // (si la collection à X langage, alors cela bouclera X fois)
  for(let i = 0; i < CollectionLangage.length; i++){
        // on récupère la méthode textContent qui récupère le contenu de
        // notre text et on le met en lowercase pour comparer dans le if
        const MotLangage = CollectionLangage[i].textContent.toLowerCase()
        // on compare si la suite de mot que l'on récupère (language)
        // est INCLU dans le MotLangage
        // Alors on laisse le display block pour qu'il soit visible
        if(MotLangage.includes(language)){
          CollectionLangage[i].style.display = "block"
        }
        // sinon on retire le display block
        else{
          CollectionLangage[i].style.display = "none"
        }
    }
})



