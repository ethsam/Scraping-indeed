$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });

    $('form').submit(function(event) {
        event.preventDefault();
        var donnees = $('#envoi').val();
              $.ajax({
             url : 'scrap.php', // La ressource ciblée
             type : 'POST', // Le type de la requête HTTP.
             data : 'motclef=' + donnees,
             success: function( data ) {
                $('#indeed').replaceWith($('#indeed').html(data));}
                    });
        return false;
        $(this).removeClass('open');
    })
});
