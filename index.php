<?php
  require_once 'includes/vendor.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
      <!-- Encodeing Tags -->
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= $info['title'] ?></title>
      <!-- Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

      <!-- Style Files -->
      <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="styles/main.css?r=<?php echo rand(1000,99999); ?>">

    </head>

    <body>

   <!-- Navbar Section -->
    <div class="header p-3">
      <h2>Scroll Indicator</h2>
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>
    </div> <!-- End Navbar -->

    <!-- Frist Section -->
    <section class="description">
        <div class="container">
            <h1 class="display-1 text-center mt-4 mb-4">القصير</h1>
            <p class="lead">مدينة وميناء في محافظة البحر الأحمر، مصر. اسمها القديم ليوكوس ليمن (ويعني الميناء الأبيض باليونانية، Λευκός Λιμήν). للقصير تاريخ طويل يمتد لأكثر من 5000 سنة، ومن هناك بدأت الملكة حتشبسوت رحلتها الاستكشافية إلى بلاد بونت. في القرن السادس عشر حكمها السلطان سليم الأول وهو ما يزال يقف على شكل تمثال في قلب المدينة وللقصير اهمية استراتيجية حربية واليوم تعتبر منتجعا سياحياً هادئاً بشواطئها الرملية ومياهها الصافية وشعابها المرجانية ورياضاتها المائية.

تقع القصير علىب عد 138 كم جنوب الغردقة، 139 كم شمال مرسى علم، و73 كم شمال مطار مرسى علم الدولي. في 1986 كان عدد سكانها حوالي 20.000 نسمة، اليوم وصل عدد سكانها إلى حوالي 50.000 نسمة.

</p>
        </div>
    </section> <!-- End descripton section -->


    <!-- JS section -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>

 <script>
 window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

 </script>

    </body>
</html>