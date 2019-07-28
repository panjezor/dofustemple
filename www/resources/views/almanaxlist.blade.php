<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content=""/>
        <title>Rzeczy na almanaxa</title>


    </head>
    <body>
        <p>hehe</p>

        <script>
            $().ready()
            {
                for (var i = 0; i < 365; i++) {
                    var date = new Date();
                    date.setDate(date.getDate() + i);
                    var mon = date.getMonth() + 1;
                    var futDate = date.getFullYear() + "-";
                    if (mon < 10) {
                        futDate += "0" + mon + "-";
                    } else {
                        futDate += mon + "-";
                    }
                    if (date.getDate() < 10) {
                        futDate += "0" + date.getDate();
                    } else {
                        futDate += +date.getDate();
                    }
                    var link = "/almanax/" + futDate;
                    $('p').append('<a href="' + link + '">click</a><br>');

                }
            }
        </script>
    </body>
</html>