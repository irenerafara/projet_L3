$(document).ready(function() {
    $('#form-add-comptoirfonte').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-add-comptoirfonte')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"comptoir/enregistrer_comptoirfonte",
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
                    alert('Echec de l\'enregistrement du comptoir de fonte')
                }
            })
        }
    })

    $('#button-add').on('click', function() {
        $('#form-add-comptoirfonte .modal-title').html('Ajouter comtoir de fonte')
        $('#form-add-comptoirfonte input').val('')
    })

})

function edit_comptoirfonte(id) {
    var tr = $('#comptoirfonte-'+id)
    $('#form-add-comptoirfonte .modal-title').html('Editer comptoir de fonte')
    $('#IDComptoirDeFonte').val(id)
    $('#NomSocieteComptoirDeFonte').val(tr.find('td').eq(0).html())
    $('#MandataireComptoirDeFonte').val(tr.find('td').eq(1).html())
    $('#ContactComptoirDeFonte').val(tr.find('td').eq(2).html())
    $('#AdresseSiegeSocialeComptoirDeFonte').val(tr.find('td').eq(3).html())
    $('#NumInscriptionComptoirDeFonte').val(tr.find('td').eq(4).html())
    $('#DateAgrementComptoirDeFonte').val(tr.find('td').eq(5).html())
    $('#addComptoirFonteModal').modal('show')
}

function delete_comptoirfonte(id) {
    if(confirm('Voulez-vous supprimer cet comptoir de fonte ?')) {
        $.ajax({
            url: base_url(true)+"comptoir/supprimer_comptoirfonte/"+id,
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
                alert('Echec de la suppression du comptoir de fonte')
            }
        })
    }
}