$(document).ready(function() {
    $(".rating-form").submit(function(e) {

        e.preventDefault();

        var url = $(this).attr('action');
        var form = $(this);

        $.ajax({
            type: "POST",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data)
            {
                if (form.data('type') == 'like') {
                    var this_span = form.parent().find('.likes-count');
                    var another_span = form.parent().find('.dislikes-count');
                } else {
                    var this_span = form.parent().find('.dislikes-count');
                    var another_span = form.parent().find('.likes-count');
                }

                let count = this_span.html();
                this_span.html(parseInt(count)+1);


                //Disable
                var this_button = this_span.parent();
                var another_button = another_span.parent();

                if (another_button.is(':disabled')) {
                    another_button.removeAttr('disabled');

                    let count = another_span.html();
                    another_span.html(parseInt(count)-1);
                }

                this_button.attr('disabled', 'disabled');
            }
        });
    });
});
