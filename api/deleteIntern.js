function deleteBtn(delId) {
    jQuery.ajax({
        url:'api/deleteIntern.php',
        type:'post',
        data:'id='+delId,
        success: function () {
            alert('De gebruiker is verwijderd.');
            jQuery('#del'+delId).remove();
        }
    });
}