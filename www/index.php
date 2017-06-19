<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Web-Fabrique</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
  $(document).ready (function () { //start when site ready
    $("#done").click (function () { // function start when you click on button
      $('#messageShow').hide();
      var name = $("#name").val();
      var email = $("#email").val();
      var fail = "";
      if (name.length < 3)   fail = "Имя должно быть больше 3-х символов";
      else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
          fail = "Вы ввели некорректный E-mail";
      if (fail != "") {
        $('#messageShow').html (fail + "<div class = 'clear'><br></div>");
        $('#messageShow').show();
        return false;
      }
      $.ajax ({
        url: 'ajax/feedback.php',
        type : 'POST', // method of Sending
        cache : false,
        data : {'name': name, "email": email}, // sending data
        dataType: 'html',
        success: function (data) {
          $('#messageShow').html (data + "<div class = 'clear'><br></div>");
          $('#messageShow').show();
        }
      })
    })
  })
</script>
</head>
<body>
    <div id="wrapper">
      <div id="header">
          <img src="images/logo.png" alt="logo">
          <h1 class="logo">Web-Fabrique</h1>
          <p>С Web-Fabrique — разработка сайтов
      выходит на новый уровень</p>
      </div>

        <div class="content">
           <!--Блок«Наши проекты»-->
           <div id="projects">
               <h1>Наши Проекты</h1>
                   <img class="plate_1" src="images/plate_1.png" alt="">
                   <img class="plate_2" src="images/plate_2.png" alt="">
                   <img class="plate_3" src="images/plate_3.png" alt="">
                   <img class="plate_4" src="images/plate_4.png" alt="">
           </div>
            <!--Блок Наша Команда -->
            <div id="about_us">
                <h1>Пару слов о нас</h1>
                <p>Привет, мы Web-Fabrique. Команда разработчиков,<br> которая специализируется на Веб-технологиях. Главная<br> цель — делать наших партнеров счастливыми. Под<br> словом «партнер» мы подразумеваем наших клиентов. <br>«Три кита» нашей команды — слаженность, упорство и, <br>самое основное, умение слушать и слышать партнеров. <br>Мы стремимся к совершенству путем улучшения <br>качества нашей команды!</p>
            </div>

            <div id="team">
                <h1>Наша команда</h1>
                <img src="images/projectmanager_icon.png" alt="">
                <p> Никита Лапин<br>
                    Project Manager<br>
                    test@gmail.com
                </p>
                <img src="images/frontend_icon.png" alt="">
                <p> Марк Алтыца<br>
                    FrontEnd-разработчик<br>
                    test@gmail.com
                </p>
                <img src="images/backend_icon.png" alt="">
                <p> Анатолий Казмин<br>
                    BackEnd-разработчик<br>
                    test@gmail.com
                </p>
            </div>

            <div id="add">
                <h1>Помимо разработки сайтов<br> мы предоставляем такие<br> услуги</h1>
                <img src="images/issue_icon.png" alt="">
                <p>Наполнение сайта уникальным<br> текстовым контентом</p>
                <img src="images/social_icon.png" alt="">
                <p>Продвижение в социальных<br> сетях</p>
                <img src="images/logo_icon.png" alt="">
                <p>Отрисовка лого для вашего<br> сайта/компании</p>
            </div>

        </div>
        <div id="footer">
             <h1>Если вам нужен сайт, свяжитесь с нами! </h1>

                 <input  class="form-name" type="text" id = "name" name="name" placeholder="Как к вам обращаться ?" required><br>
                 <input  class="form-email" type="email" id = "email" name="email" placeholder="Введите ваш E-mail" required><br>
                 <div id="messageShow"></div>
                 <input type="button" name = "done" id= "done" value = "Отправить">
                 <legend>Пожалуйста, оставте свои<br> контакты и мы свяжемся с<br> Вами!</legend>

             <div id="social">
                 <a href="vk.com/web_fabrique"><img class="vk_icon" src="images/vk_icon.png" alt=""></a>
                 <a href=""><p>vk.com/web_fabrique</p></a>
                 <img class="fb_icon" src="images/fb_icon.png" alt="">
                 <p>facebook.com/wfabrique</p>
                 <img class="mail_icon" src="images/mail_icon.png" alt="">
                 <p>wfabrique@gmail.com</p>
             </div>
         </div>
    </div>
</body>
</html>
