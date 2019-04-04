$(document).ready(function() {
    $('#form-add-comptoircomm').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-add-comptoircomm')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"comptoir/enregistrer_comptoircomm",
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
                    alert('Echec de l\'enregistrement du comptoir commerciale')
                }
            })
        }
    })

    $('#button-add-comptoircomm').on('click', function() {
        $('#form-add-comptoircomm .modal-title').html('Ajouter comtoir commerciale')
        $('#form-add-comptoircomm input').val('')
    })

})

function edit_comptoircomm(id) {
    var tr = $('#comptoircomm-'+id)
    $('#form-add-comptoircomm .modal-title').html('Editer comptoir commerciale')
    $('#IDComptoirComm').val(id)
    $('#NomSocieteComptoirComm').val(tr.find('td').eq(0).html())
    $('#MandataireComptoirComm').val(tr.find('td').eq(1).html())
    $('#ContactComptoirComm').val(tr.find('td').eq(2).html())
    $('#AdresseSiegeSocialeComptoirComm').val(tr.find('td').eq(3).html())
    $('#NumInscriptionComptoirComm').val(tr.find('td').eq(4).html())
    $('#DateAgrementComptoirComm').val(tr.find('td').eq(5).html())
    $('#addComptoirCommModal').modal('show')
}

function delete_comptoircomm(id) {
    if(confirm('Voulez-vous supprimer cette comptoir commerciale ?')) {
        $.ajax({
            url: base_url(true)+"comptoir/supprimer_comptoircomm/"+id,
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
                alert('Echec de la suppression du comptoir commerciale')
            }
        })
    }
}