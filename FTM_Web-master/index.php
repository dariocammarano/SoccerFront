<?php
/**
 * Created by PhpStorm.
 * User: Dario
 * Date: 29/7/2019
 * Time: 22:22
 */
?>
<!HTML>
<html>
    <head>
        <title>FTM_WEB</title>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <h1>Teams</h1>
        <div class="teams">

        </div>
    </body>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'GET',
                url: 'be/teamCall.php',
                // data: {action:'getAllTeamsView'},
                data: {action:'getFormInput'},
                dataType: "json",
                success: function(data) {
                    $('.teams').html(data);
                }
            });
        });
    </script>
</html>