

  if (!localStorage.getItem('cookiesAccepted')) {
    if (confirm('Ce site utilise des cookies. Acceptez-vous les cookies ?')) {
        localStorage.setItem('cookiesAccepted', true);
    }
}