<html dir="rtl" lang="ar">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <!-- <script src="assets/jquery-3.2.1.min.js"></script>
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">-->
  <link href="assets/css/style.css" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="assets/main.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c0074c63b8.js" crossorigin="anonymous"></script>

</head>

<body>
  <div id="header" class="header">
    <nav class="navbar navbar-expand-lg  bg-light">
      <!-- <a class="navbar-brand" href="#">
          <img src="https://www.coursat.org/images/logo.png" alt="كورسات">

        </a> -->
      <a class="navbar-brand js-scroll-trigger" href="#page-top">E-Learning</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown open">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"><i class="fa fa-th-large"></i> التصنيفات <span class="caret"></span></a>
            <ul class="dropdown-menu categories-menu" role="menu">
              <li>
                <a href="#">
                  لغات </a>
              </li>
              <li>
                <a href="#">
                  شبكات الحاسوب </a>
              </li>
              <li>
                <a href="#">
                  أمن المعلومات </a>
              </li>
              <li>
                <a href="#">
                  قواعد بيانات </a>
              </li>
              <li>
                <a href="#">
                  أنظمة تشغيل </a>
              </li>
              <li>
                <a href="#">
                  تطوير الويب </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a> -->
            <a href="#" class="sign-up">
              <i class="fa fa-user-plus"></i>
              تسجيل
            </a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">كورسات</a> -->
            <a href="{{url('login')}}" class="sign-in"><i class="fa fa-lock"></i> دخول</a>
          </li>


        </ul>
      </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 text-right" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">E-Learning</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 ">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">عن ELearning</a></li> 
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">التصنيفات</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li> 
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">تواصل معنا</a></li>

            </ul>
            <ul class="navbar-nav ml-auto my-2 my-lg-0">

              <li class="nav-item">
                <a href="{{url('login')}}" class="sign-up nav-link js-scroll-trigger">
                  <i class="fa fa-user-plus"></i>
                  تسجيل
                </a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="#">كورسات</a> 
                <a href="{{url('login')}}" class="sign-in nav-link js-scroll-trigger">
                  <i class="fa fa-lock"></i>
                  دخول
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
  </div>
  <div class="container">

    <div id="description">
      <div class="row">

        <div class="col-md-12">
          <h3 id="lesson_name">1- المقدمة</h3>

          <ul class="page-meta">
            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="ترتيب الدرس">
              <i class="fa fa-sort"></i> ترتيب الدرس : 1
            </li>
            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="الكورس">
              <i class="fa fa-circle-o"></i> <a href="#">احترف برنامج الفوتوشوب Photosop CS6</a>
            </li>
            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="مدة الدرس"><i class="fa fa-clock-o"></i> 00:04:22</li>
            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="المشاهدات"><i class="fa fa-eye"></i> 3,298</li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <div class="page-options">
          </div>
        </div>

      </div>
    </div>
    <!-- <div class="main"> -->
    <div class="row">
      <div class="sidebar">

        <div id="accordion" role="tablist" aria-multiselectable="true">

          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  الدرس الاول
                  <!-- <spin class="circle-icon mr-4">1</spin> -->
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">


              <div class="container">
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" name="example" 
                  value="المقدمة" />
                  المقدمة
                </label>
                <!-- <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio" name="example" />
                  <a onclick="refresh_links()" href="#">المقدمة</a>
                </label> -->
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" name="example"
                   value="المتطلبات" />
                  المتطلبات
                </label>
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" name="example"
                  value="الحلول" />
                  الحلول
                </label>
              </div>
              <!-- 
                <ul class="list-unstyled ui-steps">
                  <li class="media">
                    <a onclick="refresh_links()" href="#">حدد مهاراتك</a>
                  </li>
                  <li class="media">
                    <a onclick="refresh_links()" href="#">أدرس السوق</a>
                  </li>
                </ul> -->
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  الدرس الثاني
                  <!-- <spin class="circle-icon mr-4">2</spin> -->
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

              <div class="container">
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" name="example"
                   value="ابحث عن الأمور التي تثير الفضول"/>
                  ابحث عن الأمور التي تثير الفضول
                </label>
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice"
                  value="المتطلبات" name="example" />
                  المتطلبات
                </label>
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" 
                  value="الحلول" name="example" />
                  الحلول
                </label>
              </div>

              <!-- <ul class="list-unstyled ui-steps">
                  <li class="media">

                    <a onclick="refresh_links()" href="#">ابحث عن الأمور التي تثير الفضول</a>
                  </li>
                  <li class="media">
                    <a onclick="refresh_links()" href="#" title="المتطلبات">المتطلبات</a>
                  </li>

                </ul> -->



            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  الدرس الثالث
                  <!-- <spin class="circle-icon mr-4">3</spin> -->
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="container">
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" 
                  name="example" value="ابحث عن الأمور التي تثير الفضول"/>
                  ابحث عن الأمور التي تثير الفضول
                </label>
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" 
                  name="example" value="المتطلبات"/>
                  المتطلبات
                </label>
                <label class="row">
                  <input onclick="refresh_links()" type="radio" class="option-input radio lesson_choice" 
                  value="الحلول" name="example" />
                  الحلول
                </label>
              </div>

              <!-- <ul class="list-unstyled ui-steps">
                <li class="media">

                  <a onclick="refresh_links()" href="#">المقدمة</a>
                </li>
                <li class="media">
                  <a onclick="refresh_links()" href="#" title="المتطلبات">المتطلبات</a>
                </li>

              </ul> -->

            </div>
          </div>
        </div>

        <div class="card widget">
          <!-- <div class="card-header"> -->
          <h3 class="text-right">
            <i class="fa fa-star"></i>
            تقييم الكورس
          </h3>

          <!-- </div> -->
          <div class="card-body">

            <div class="rating-result">5</div>
            <div class="rating-start rating-large">

              <i class="fa fa-star" style="color:#F7CA18;"></i>
              <i class="fa fa-star" style="color:#F7CA18;"></i>
              <i class="fa fa-star" style="color:#F7CA18;"></i>
              <i class="fa fa-star" style="color:#F7CA18;"></i>
              <i class="fa fa-star" style="color:#F7CA18;"></i>
            </div>
            <div class="rating-user">
              <i class="fa fa-user"></i> 6
            </div>
          </div>

          <div class="view-all-rating">
            <a href="#/reviews/350">
              عرض تقييمات الطلاب
            </a>
          </div>
        </div>
        <div class="widget share-course">
          <h3 class="text-right">
            <i class="fa fa-share-alt"></i>
            شارك الكورس
          </h3>
          <div class="share-buttons">
            <input class="form-control" onclick="selectInput(this)" value="http://127.0.0.1:8000/courses" readonly="">
          </div>

          <ul class="nav list-unstyled share-buttons">
            <li>
              <a class="sharing-button google-plus" href="#" title="google plus" target="_blank">
                <i class="fa fa-google-plus"></i>
              </a>
            </li>

            <li>
              <a class="sharing-button email" href="#" title="email" target="_self">
                <i class="fa fa-envelope"></i>
              </a>
            </li>
            <li>
              <a class="sharing-button twitter" href="#/" title="twitter" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a class="sharing-button google-plus" href="#" title="google plus" target="_blank">
                <i class="fa fa-google-plus"></i>
              </a>
            </li>
            <li>
              <a class="sharing-button email" href="#" title="email" target="_self">
                <i class="fa fa-envelope"></i>
              </a>
            </li>
            <li>
              <a class="sharing-button whatsapp" href="#" title="whatsapp" target="_blank">
                <i class="fa fa-whatsapp"></i>
              </a>
            </li>

          </ul>
        </div>

      </div>

      <div class="main">
        <div id="wrapper">
          <div id="content">
            <div id="links_container">

            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- </div> -->


    <!-- <div id="footer" class="footer">
      <p>Footer</p>
    </div> -->



  </div>
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright © 2021 </div>
    </div>
  </footer>
  <script type="text/javascript">
    $(document).ready(function() {
      // $('.navbar-collapse a').click(function() {
      //   $(".navbar-collapse").collapse('hide');
      // });
      // $('li .classloader').click(function() {

      //   $('#content').load('content.php');
      // });
      jQuery('.lesson_choice').click(function() {
        var fired_button = $(this).attr("value");
        document.getElementById('lesson_name').innerHTML = fired_button;
      });
    
  


    $('#content').load('getLinks');

    window.refresh_links = function() {

    $.get('/getLinks', function(data) {
      document.getElementById('links_container').innerHTML = data;
    })
    }

    })
  </script>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!-- Plugins JS -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

</html>