// Fonction pour supprimer une tâche avec une confirmation
const removeBtns = document.querySelectorAll('.remove-to-do');
removeBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
        if (!confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')) {
            e.preventDefault();
        }
    });
});