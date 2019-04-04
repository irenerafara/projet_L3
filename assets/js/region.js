$(document).ready(function() {
    $('#form-add-region').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-add-region')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"exportateur/enregistrer_region",
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
                    alert('Echec de l\'enregistrement de la region')
                }
            })
        }
    })

    $('#button-add').on('click', function() {
        $('#form-add-region input').val('')
    })

})

function edit_exportateur(id) {
    var tr = $('#exportateur-'+id)
    $('#IDRegion').val(id)
    $('#NomRegion').val(tr.find('td').eq(0).html())
    
    $('#addRegionModal').modal('show')
}

function delete_region(id) {
    if(confirm('Voulez-vous supprimer cet region ?')) {
        $.ajax({
            url: base_url(true)+"exportateur/supprimer_region/"+id,
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
                alert('Echec de la suppression de la region')
            }
        })
    }
}