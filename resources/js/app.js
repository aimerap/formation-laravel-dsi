require('./bootstrap');
import Swal from 'sweetalert2'

window.deleteConfirm = function(formId) {
    Swal.fire({
        title: 'Êtes vous sûr de vouloir effectuer cette action ?',
        showDenyButton: true,
        confirmButtonText: `Supprimer`,
        denyButtonText: `Annuler`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    })
}