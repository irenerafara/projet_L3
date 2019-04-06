$(document).ready(function() {
    $(function() {  
        $('#TypeExportateur').trigger('change'); 
    })

    $('#form-save-exportation').on('submit', function(e) {
        e.preventDefault();
        if(form_validate('#form-save-exportation')){
            var formdata = $( this ).serialize()
            $.ajax({
                url: base_url(true)+"exportation/enregistrer_exportation",
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
                    alert('Echec de l\'enregistrement de l\'exportation')
                }
            })
        }
    })

    $('#button-save-exportation').on('click', function() {
        $('#form-save-exportation .modal-title').html('Ajouter exportation')
        $('#form-save-exportation input').val('')
    })

    $('#TypeExportateur').on('change', function() {
        var idType = $(this).val()
        $.ajax({
            url: base_url(true)+"exportation/load_exportateur/"+idType, 
            success: function(data) {
                $('#IDExportateur').html(data)
            },
            error: function() {
                alert('Impossible de charger les '+$('#TypeExportateur option[value='+idType+']').html())
            }
        })
    })
    $('#PrixUnitaireExportation, #QuantiteExportation').on('keyup',function(){
         var quantite = $('#QuantiteExportation').val()
         var prixUnitaire = $('#PrixUnitaireExportation').val()
         if (quantite != "" && prixUnitaire != "") {
             quantite = parseFloat(quantite)
             prixUnitaire = parseFloat(prixUnitaire)
             $('#PrixTotaleExportation').val(quantite*prixUnitaire*1000)

         }
    })
    $('.btn-edit').on('click', function() {
        var tr = $(this).parent().parent().parent()
        var info = tr.attr('id').split('-')
        $('#form-save-exportation .modal-title').html('Editer exportation')
        $('#IDExportation').val(info[1])
        $('#TypeExportateur').val(info[2]).trigger('change')
        $('#IDExportateur').val(info[3])
        $('#AnneeExportation').val($.trim(tr.find('td').eq(2).html()))
        $('#QuantiteExportation').val(tr.find('td').eq(4).html())
        $('#PrixUnitaireExportation').val(tr.find('td').eq(5).html())
        $('#PrixTotaleExportation').val(tr.find('td').eq(6).html())
        $('#addExportationModal').modal('show')
    })

})



function delete_exportation(id) {
    if(confirm('Voulez-vous supprimer cette exportation ?')) {
        $.ajax({
            url: base_url(true)+"exportation/supprimer_exportation/"+id,
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
                alert('Echec de la suppression de l\'exportation')
            }
        })
    }
}