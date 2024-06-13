const form = document.getElementById('signup-form');
const errorText = form.querySelector('.error-text');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Réinitialiser le message d'erreur
  errorText.textContent = '';

  // Récupérer les valeurs des champs du formulaire
  const fname = form.fname.value.trim();
  const lname = form.lname.value.trim();
  const numero = form.Numero.value.trim();
  const password = form.password.value.trim();

  // Validations
  let isValid = true;

  // Vérifier si les champs obligatoires sont remplis
  if (fname === '' || lname === '' || numero === '' || password === '') {
    isValid = false;
    errorText.textContent = 'Veuillez remplir tous les champs obligatoires.';
  }

  // Vérifier si le numéro de téléphone contient uniquement des chiffres
  const phoneRegex = /^\d+$/;
  if (!phoneRegex.test(numero)) {
    isValid = false;
    errorText.textContent = 'Le numéro de téléphone doit contenir uniquement des chiffres.';
  }

  // Vérifier la longueur du mot de passe
  if (password.length < 8) {
    isValid = false;
    errorText.textContent = 'Le mot de passe doit contenir au moins 8 caractères.';
  }

  // Si toutes les validations sont réussies, soumettre le formulaire
  if (isValid) {
    // Envoi des données du formulaire au serveur via AJAX
    const formData = new FormData(form);
    fetch('inscription.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      // Gérer la réponse du serveur
      if (data === 'success') {
        // Rediriger l'utilisateur vers une page de confirmation ou autre
        window.location.href = 'application.php';
      } else {
        // Afficher le message d'erreur
        errorText.textContent = data;
      }
    })
    .catch(error => {
      // Gérer les erreurs
      console.error('Erreur :', error);
      errorText.textContent = 'Une erreur s\'est produite. Veuillez réessayer plus tard.';
    });
  }
});