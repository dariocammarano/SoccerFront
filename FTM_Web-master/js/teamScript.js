$(document).ready(function() {

    $("._Team_form_btn").click(function (e) {
        var form = $('._Team_form');

        $.ajax({
            type: 'GET',
            url: 'be/teamCall.php',
            data: {action: 'create', data: form.serialize()},
            dataType: "json"
        });
    });

});
