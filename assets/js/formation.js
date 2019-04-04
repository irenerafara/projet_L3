$(document).ready(function() {
    $('#form-save-formation').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-formation')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"formation/enregistrer_formation",
                type: "POST",
                dataType: "JSON",
                data: formdata,
                success: function(data) {
                    if(data.status == 1) {
                        window.location.reload()
                    } else {
                        alert('Une erreur est survenue. Veuillez réessayer!')
                    }
                },
                error: function(err) {
                    console.log(err)
                    alert('Echec de l\'enregistrement de la formation')
                }
            })
        }
    })

    $('#button-save-formation').on('click', function() {
        $('#form-save-formation .modal-title').html('Ajouter formation')
        $('#form-save-formation input').val('')
    })

})

function edit_formation(id) {
    var tr = $('#formation-'+id)
    $('#form-save-formation .modal-title').html('Editer formation')
    $('#IDFormation').val(id)
    $('#DateDebutFormation').val(tr.find('td').eq(0).html())
    $('#DateFinFormation').val(tr.find('td').eq(1).html())
    $('#MotifMissionFormation').val(tr.find('td').eq(2).html())
    $('#DetailFormation').val(tr.find('td').eq(3).html())
    $('#addFormationModal').modal('show')
}

function delete_formation(id) {
    if(confirm('Voulez-vous supprimer cette formation ?')) {
        $.ajax({
            url: base_url(true)+"formation/supprimer_formation/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                if(data.status == 1) {
                    window.location.reload()
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer!')
                }
            },
            error: function(err) {
                console.log(err)
                alert('Echec de la suppression de la formation')
            }
        })
    }
}