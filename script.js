

if (!localStorage.getItem('cookiesAccepted')) {
    if (confirm('Ce site utilise des cookies. Acceptez-vous les cookies ?')) {
        localStorage.setItem('cookiesAccepted', true);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Code à exécuter une fois que le document est prêt

    // Récupérez l'élément d'entrée de recherche
    const searchInput = document.getElementById("searchInput");

    // Récupérez toutes les cartes de produits
    const productCards = document.querySelectorAll(".card");

    // Ajoutez un gestionnaire d'événement "keyup" à l'élément de recherche
    searchInput.addEventListener("keyup", function () {
        // Récupérez la valeur saisie dans le champ de recherche, en mettant en minuscules
        const searchTerm = searchInput.value.toLowerCase();

        // Parcourez toutes les cartes de produits
        productCards.forEach(card => {
            const cardTitle = card.querySelector(".card-title").textContent.toLowerCase();
            const cardText = card.querySelector(".card-text").textContent.toLowerCase();

            // Vérifiez si le terme de recherche est présent dans le titre ou le texte de la carte
            if (cardTitle.includes(searchTerm) || cardText.includes(searchTerm)) {
                card.style.display = "block"; // Affiche la carte
            } else {
                card.style.display = "none"; // Cache la carte
            }
        });
    });
});

/*
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});
*/
/*dark mode */

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;
    const header = document.querySelector('header');
    const all = document.querySelector('.bg-body-tertiary');
    const footer = document.querySelector("footer")
    if (body.classList.contains('dark')) {
        //for body general
        body.classList.add('light')
        body.classList.remove('dark')
        //for all bootsrap class
        all.classList.add('bs-emphasis-color')
        all.classList.remove('bg-body-tertiary')
        //for footer 
        //footer.classList.add('light')
        //footer.classList.remove('dark')
        btnToggle.innerHTML = "Go Dark"

    } else if (body.classList.contains('light')) {
        // for body gen
        body.classList.add('dark')
        body.classList.remove('light')
        //for all bootsrap class 
        all.classList.add('bg-body-tertiary')
        all.classList.remove('bs-emphasis-color')
        //for footer 
        //body.classList.add('dark')
        //body.classList.remove('light')
        btnToggle.innerHTML = "Go Light"
    }

})

/*Dark mode*/