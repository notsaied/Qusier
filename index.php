<?php
  require_once 'includes/vendor.php';
  $b = new backend();
  $rand_message = $b->getRandMessage();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl" prefix="og: http://ogp.me/ns#">
    <head>
      <!-- Encodeing Tags -->
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= $info['title'] ?></title>

      <!-- Meta TAGS -->
      <meta name="description" content="<?= $info['description'] ?>">
      <meta name="keywords" content="<?= $info['keywords'] ?>">
      <meta name="author" content="Saiedoz">

      <!-- og:og -->
      <meta property="og:title" content="<?= $info['title'] ?>" />
      <meta property="og:description" content="<?= $info['description'] ?>" />
      <meta property="og:image" content="<?= $info['image'] ?>" />
      <meta property="og:locale" content="ar_EG" />

      <!-- Twitter Tags -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:title" content="<?= $info['title'] ?>" />
      <meta name="twitter:description" content="<?= $info['description'] ?>" />
      <meta name="twitter:image" content="<?= $info['image'] ?>" />

      <!-- Lib -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

      <!-- Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!-- Style Files -->
      <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="styles/main.css">
   </head>

    <body>
   <!-- Navbar Section -->
    <div class="header p-3">
        <div class="container">
      <h2 class="title" style="text-align:center;">مرحبا بك</h2>
      </div>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div> <!-- End Navbar -->

    <!-- Frist Section -->
    <section class="description py-2">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="display-1 text-center mt-4 mb-4">القصير</h1>
            <p class="lead">مدينة وميناء في محافظة البحر الأحمر، مصر. اسمها القديم ليوكوس ليمن (ويعني الميناء الأبيض باليونانية، Λευκός Λιμήν). للقصير تاريخ طويل يمتد لأكثر من 5000 سنة، ومن هناك بدأت الملكة حتشبسوت رحلتها الاستكشافية إلى بلاد بونت. في القرن السادس عشر حكمها السلطان سليم الأول وهو ما يزال يقف على شكل تمثال في قلب المدينة وللقصير اهمية استراتيجية حربية واليوم تعتبر منتجعا سياحياً هادئاً بشواطئها الرملية ومياهها الصافية وشعابها المرجانية ورياضاتها المائية. تقع القصير علي بعد 138 كم جنوب الغردقة، 139 كم شمال مرسى علم، و73 كم شمال مطار مرسى علم الدولي. في 1986 كان عدد سكانها حوالي 20.000 نسمة، اليوم وصل عدد سكانها إلى حوالي 50.000 نسمة.</p>

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
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="side_title">اهم المعالم</h2>

        <p class="lead">
            تحتوي مدينة القصير علي العديد من المعالم والاماكن الاثارية والسياحية نظرا لما حدث في المدينة قديما
        </p>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="styles/images/tabya.png" alt="الطابية بمدينة القصير">
      <div class="carousel-caption d-none d-md-block">
        <h5>الطابية</h5>
        <p>شيد العثمانيون فى عام 1799 ميلادية، صرحاً ضخماً لحماية مدينة القصير فى تلك التوقيت من قاطعى الطرق، واللصوص، على قوافل الحجاج، التى كانت تغادر إلى بلاد الحجاز من ميناء القصير، وكذلك على أهل القصير، والذين بسبب تلك اللصوص تركوا المدينة انذاك وتعطلت الحياة والتجارة، وشيد القلعة العثمانية فى تلك التوقيت لحمايتهم.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="styles/images/shat.png" alt="شاطئ مدينة القصير البحر الأحمر">
      <div class="carousel-caption d-none d-md-block">
        <h5>شواطئ مدينة القصير</h5>
        <p>شواطئ مدينة القصير جنوب البحر الأحمر، التى تتسم بالبساطة التى يمتزج بها الجمال والطبيعة الخلابة، وكذلك عبق التاريخ فى المبانى القريبة من البحر، هنا فى مدينة القصير البحر للجميع لا شواطئ للأغنياء ولا شواطئ للفقراء، الجميع يمكنه أن يقضى وقته كيفما يشاء على أجمل شواطئ البحر الأحمر.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="styles/images/elmena.png" alt="ميناء القصير القديمة">
      <div class="carousel-caption d-none d-md-block">
        <h5>ميناء القصير القديمة</h5>
        <p>هذا الميناء شهد خلال هذين العصرين أزهى أيامه، حيث لعبت مدينة القصير دورا مهما واستخدمت مع ميناء عيذاب جنوبا كمركز تجاري مهم للتجارة مع الهند واليمن وشرق إفريقيا، وكان السبب الرئيسي لهذا الازدهار قربها من قوص الحاضرة العلمية والتجارية للصعيد في هذا العصر ،حيث كانت الأخيرة أهم المدن التجارية في ذلك الوقت .</p>
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


      </div> <!-- End Container -->

    </section> <!-- End Places Section -->

    <section class="times py-2 bg-there">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="side_title">مواعيد الاذان</h2>
            <p class="lead">
                اوقات الاذان حسب التوقيت المحلي لمدينة القصير.
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
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
             <h2 class="side_title">رساله عشوائية</h2>
             <p class="lead">كل مرة هتدخل الموقع هتلاقي رسالة عشوائية من الزوار او مواطنين المدينة.</p>

                <div class="text-center">

                <img src="https://www.svgrepo.com/show/5125/avatar.svg" width="100" alt="Profile Picture" />

                <div class="mt-2"><b><?= $rand_message['name'] ?></b></div>

                <blockquote class="mt-2"><?= $rand_message['message'] ?></blockquote>

                </div>

        </div>
    </section>


    <section class="leave_message py-2 bg-there">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="side_title">حابب تقول حاجه ؟</h2>
            <p class="lead">لو عندك اقتراح او اي حاجه حابب تقولها اتفضل اكتبها وهتظهر في الموقع للزائرين.</p>

        <form action='includes/message.php' method="POST">

        <div class="input-container">
            <input type="text" id="name" name="name" class="text-input" autocomplete="off" placeholder="قم باخال اسمك" required />
            <label class="label" for="name">اسمك</label>
         </div> <!-- End Name Input -->

        <div class="input-container mt-3">
            <input type="text" id="email" name="email" class="text-input" autocomplete="off" placeholder="قم بادخال بريدك الالكتروني" required />
            <label class="label" for="email">البريد الالكتروني</label>
         </div> <!-- End email Input -->

         <input type="hidden" name="csrf_token" value="<?= $TOKEN ?>" />

        <div class="input-container mt-3">
            <textarea type="text" id="message" name="message" class="text-input" autocomplete="off" placeholder="قم بادخال رسالتك" required ></textarea>
            <label class="label" for="message">رسالتك</label>
         </div> <!-- End message Input -->


                <button class="btn btn-primary btn-block mt-2" required><i class="ri-send-plane-fill"></i> ارسال</button>
            </form>
        </div>
    </section>

    <footer class="py-4 text-center bg-dark text-light">
        <div class="container">
            <div class="text-center">
                <div class="mt-3">صنع بواسطة &copy; سعيدوز</div>
             <a href="whatsapp://send?text=<?= $link; ?>" data-action="share/whatsapp/share" target="_blank"><i class="ri-whatsapp-line icon" style="color:#2FCC71;"></i> </a>
             <a href="https://instagram.com/notsaied" target="_blank"><i class="ri-instagram-line icon" style="color:#B817BE;"></i> </a>
             <a href="https://facebook.com/notsaied" target="_blank"><i class="ri-facebook-circle-line icon" style="color:#111EFF;"></i> </a>
            </div>
        </div>
    </footer>

    <!-- JS section -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
<script src="styles/main.js"></script>
    <!--
   [] Big Thx For :
          Mohamed Yousef
          Owners Pictures in wb
          Hady Store

   [] Connnect With Me
        https://fb.com/notsaied
        https://instagram.com/notsaied
        https://t.me/notsaied
   -->
    </body>
</html>