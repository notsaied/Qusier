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
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!-- Style Files -->
      <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="styles/main.css?r=<?php echo rand(1000,99999); ?>">

    </head>

    <body>

   <!-- Navbar Section -->
   <!-- https://jsfiddle.net/mohamedyousef1980/4up5a43d/1/
      Big Thx For :  Mohamed Yousef
   -->
    <div class="header p-3">
      <h2 class="title" style="text-align:center;">مرحبا بك</h2>
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>
    </div> <!-- End Navbar -->

    <!-- Frist Section -->
    <section class="description py-2">
        <div class="container">
            <h1 class="display-1 text-center mt-4 mb-4">القصير</h1>
            <p class="lead">مدينة وميناء في محافظة البحر الأحمر، مصر. اسمها القديم ليوكوس ليمن (ويعني الميناء الأبيض باليونانية، Λευκός Λιμήν). للقصير تاريخ طويل يمتد لأكثر من 5000 سنة، ومن هناك بدأت الملكة حتشبسوت رحلتها الاستكشافية إلى بلاد بونت. في القرن السادس عشر حكمها السلطان سليم الأول وهو ما يزال يقف على شكل تمثال في قلب المدينة وللقصير اهمية استراتيجية حربية واليوم تعتبر منتجعا سياحياً هادئاً بشواطئها الرملية ومياهها الصافية وشعابها المرجانية ورياضاتها المائية.

تقع القصير علىب عد 138 كم جنوب الغردقة، 139 كم شمال مرسى علم، و73 كم شمال مطار مرسى علم الدولي. في 1986 كان عدد سكانها حوالي 20.000 نسمة، اليوم وصل عدد سكانها إلى حوالي 50.000 نسمة.

</p>

<div class="mouse_scroll">

		<div class="mouse">
			<div class="wheel"></div>
		</div>
		<div class="ml-1">
			<span class="m_scroll_arrows unu"></span>
			<span class="m_scroll_arrows doi"></span>
			<span class="m_scroll_arrows trei"></span>
		</div>
</div> <!-- End Mouse Scroll DIV -->

        </div>
    </section> <!-- End descripton section -->

    <section class="places py-2">
        <div class="container">
            <h2 class="side_title">اهم المعالم</h2>

        <p class="lead">
            تحتوي مدينة القصير علي العديد من المعالم والاماكن الاثارية والسياحية نظرا لما حدث في المدينة قديما
        </p>

<div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

<div class="carousel-item active">
  <img src="https://img.youm7.com/ArticleImgs/2019/10/7/50984-2-%D8%A7%D9%84%D8%B7%D8%A7%D8%A8%D9%8A%D8%A9-%D8%A8%D8%A7%D9%84%D9%82%D8%B5%D9%8A%D8%B1.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>hpef</h5>
    <p>ewfewf</p>
  </div>
</div>

<div class="carousel-item">
  <img src="https://img.youm7.com/ArticleImgs/2019/10/7/50984-2-%D8%A7%D9%84%D8%B7%D8%A7%D8%A8%D9%8A%D8%A9-%D8%A8%D8%A7%D9%84%D9%82%D8%B5%D9%8A%D8%B1.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>hpef</h5>
    <p>ewfewf</p>
  </div>
</div>

<div class="carousel-item">
  <img src="https://img.youm7.com/ArticleImgs/2019/10/7/50984-2-%D8%A7%D9%84%D8%B7%D8%A7%D8%A8%D9%8A%D8%A9-%D8%A8%D8%A7%D9%84%D9%82%D8%B5%D9%8A%D8%B1.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>hpef</h5>
    <p>ewfewf</p>
  </div>
</div>


  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>


    </section> <!-- End Places Section -->

    <section class="times py-2 bg-there">
        <div class="container">
            <h2 class="side_title">مواعيد الاذان</h2>
            <p class="lead">
            اوثات الاذان حسب التوقيت المحلي لمدينة القصير
            </p>
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">التوقيت</th>
      <th scope="col">الساعة</th>
    </tr>
  </thead>
  <tbody>
      <?php

        $f = file_get_contents('includes/azan.txt');
        $js = json_decode($f);
        $pray_name = ['وقت الإمساك','الفجر','الظهر ','العصر ','المغرب ','العشاء'];

        foreach($js->times as $k => $time){

            echo '<tr><td>'.$pray_name[$k].'</td><td>'.$time.'</td></tr>';

        }

      ?>
  </tbody>
</table>
        </div>
    </section>


    <section class="random_message py-2">
        <div class="container">
             <h2 class="side_title">رساله عشوائية</h2>
             <p class="lead">
               رساله عشوائية .. انت كمان تقدر تسيب رساله وغيرك هيقدر يشوفها لما يدخل علي الموقع
             </p>

                <div class="text-center">

                <img src="https://www.svgrepo.com/show/5125/avatar.svg" width="100" alt="Profile Picture" />

                <div class="mt-2">Ahmed SAied</div>

                <p class="lead">
             بحبك يا بلادي بحبك يا بلادي بحبك يا بلادي بحبك يا بلادي بحبك يا بلادي
                </p>

                </div>

        </div>
    </section>


    <section class="leave_message py-2 bg-there">
        <div class="container">
            <h2 class="side_title">حابب تقول حاجه ؟</h2>
            <p class="lead">
               اكتب رساله الكل هيشوفها تعبيرا عن اي حاجه حاببها او افتراح للبد
            </p>
            <form>
                <input type="text" class="form-control" id="name" placeholder="اسمك" required />
                <input type="email" id="email" class="form-control" placeholder="ايميلك" required />
                <textarea id="message" class="form-control" placeholder="رسالتك" required></textarea>
                <button class="btn btn-success btn-block" required>ارسال</button>
            </form>
        </div>
    </section>

    <section class="share py-3 bg-light text-center">
         <i class="ri-whatsapp-line icon" style="color:#2FCC71;"></i>
         <i class="ri-instagram-line icon" style="color:#B817BE;"></i>
         <i class="ri-facebook-circle-line icon" style="color:#111EFF;"></i>
    </section>

    <footer class="py-4 text-center bg-dark text-light">
        Developered By <a href="https://instagram.com/notsaied">Saiedoz</a>
    </footer>

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
$('.carousel').carousel();


function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('.title').offset().top;
    if (window_top > div_top) {
        $('.title').addClass('stick');
    }
    else {
        $('.title').removeClass('stick');
    }
}

let sections = {
   'description':'عن القصير',
   'places':'اهم المعالم',
   'times':'مواعيد الاذان',
   'leave_message': 'عايز تقول حاجه ؟',
   'random_message':'رسايل ناس تانيه'
};

 $(window).scroll(function(){
        $.each(sections ,function(k,v){
             if($(window).scrollTop() > $('.'+k).offset().top && $(window).scrollTop() < $('.'+k).offset().top + $('.'+k).outerHeight(true) ){
                 $('.title').text(v);
              }
        });
        $('.title').css({'text-align':'right'});
});



 </script>

    </body>
</html>