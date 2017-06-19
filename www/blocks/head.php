<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Web-Fabrique</title>
  <script src="/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(document).ready (function () {
      $("#submit").click (function ()
       {
        $('messageShow').hide;
        var name = $("#name").val ();
        var mail = $("#mail").val ();
        var fail = "";
        if (mail.split ('@').length - 1 == 0 || mail.split ('.').length - 1 == 0)
              fail = "Вы ввели некорректный E-mail";
        else if (name.length < 3) {
          fail = "Имя не менее 3-х символов";

        if (fail !="") {
          $('messageShow').html (fail + "<div class= 'clear'><br></div") {
          $('messageShow').show();
          return false;
            }
          });
        }

        }
        }
        }
      });
    });
</script>
</head>
