$(document).ready(function() {
    $('#createticket').on('submit', function(e) {
        e.preventDefault();
        var $this = $(this);
        $.ajax({
            url: $this.attr('action'),
            type: $this.attr('method'),
            data: $this.serialize(),
            dataType: 'json',
            success: function(json) {
                if (json.response === 'success') {
                    new PNotify({
                        title: 'Ticket créé',
                        text: 'Votre ticket a bien été créé',
                        addclass: 'bg-success'
                    });
                    $('#sujet').val('');
                    $('#contenu').val('');
                    window.setTimeout(function() {
                        window.location = "support"
                    }, 1500)
                } else {
                    var error = json.response;
                    new PNotify({
                        title: 'Attention',
                        text: error,
                        addclass: 'bg-warning'
                    })
                }
            }
        })
    });
    $('#contenu').keypress(function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $(this).parents('form').submit()
        }
    })
});