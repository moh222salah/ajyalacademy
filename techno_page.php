<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تكنو أجيال</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script> new WOW().init(); </script>
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">


  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      color: #333;
      direction: rtl;
      overflow-x: hidden;
    }

    

    .about, .services, .relax-zone {
      padding: 40px 20px;
      max-width: 1000px;
      margin: auto;
      animation: fadeIn 1.5s ease forwards;
    }

    .about h2, .services h2, .relax-zone h2 {
      color: #ff6f00;
      font-size: 28px;
    }

    .service-boxes {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .box {
      background-color: #fff3e0;
      border: 1px solid #ffe0b2;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      transform: translateY(0);
    }

    .box:hover {
      transform: translateY(-10px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }


    .info-toggle {
      text-align: center;
      margin-top: 30px;
    }

    .info-toggle button {
      background-color: #ff6f00;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .info-toggle button:hover {
      background-color: #e65100;
    }

    .info-box {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffe0b2;
      border-radius: 12px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.15);
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.5s ease;
      display: none;
    }

    .info-box.show {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }

    .info-box:hover {
      background-color: #ffd180;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: background-color 0.3s, box-shadow 0.3s;
    }

    @keyframes fadeSlideDown {
      0% { opacity: 0; transform: translateY(-30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .relax-zone {
      background-color: #f1f1f1;
      margin-top: 40px;
      border-radius: 12px;
    }

    .relax-zone ul {
      list-style: none;
      padding: 0;
    }

    .relax-zone ul li {
      margin-bottom: 12px;
      background-color: #ffe0b2;
      padding: 12px;
      border-radius: 8px;
      transition: background-color 0.3s;
      cursor: pointer;
    }

    .relax-zone ul li:hover {
      background-color: #ffd180;
    }

    .details {
      display: none;
      margin-top: 10px;
      background-color: #fff3e0;
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .relax-zone ul li:hover .details {
      display: block;
    }

    .about-box {
      background-color: #ffe0b2;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      margin-top: 20px;
    }

    .about-box p {
      margin: 0;
    }

    .about-box h3 {
      color: #ff6f00;
      font-size: 24px;
    }

  </style>
</head>
<body>

  

  <?php include 'header.php'; ?>

<section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f;">تكنو اجيال</h1>
  </div>
</section>


  <section class="services">
    <h2>ماذا نقدم؟</h2>
    <div class="service-boxes">
      <div class="box">
        <h3>💻 دورات البرمجة</h3>
        <p>تعلم أساسيات البرمجة باستخدام لغات مثل Scratch وPython.</p>
      </div>
      <div class="box">
        <h3>🎨 التصميم والإبداع</h3>
        <p>أساسيات التصميم الرقمي، والرسم باستخدام الحاسوب.</p>
      </div>
      <div class="box">
        <h3>🤖 الروبوتات والإلكترونيات</h3>
        <p>تعلم بناء وبرمجة الروبوتات باستخدام Arduino وقطع إلكترونية.</p>
      </div>
      <div class="box">
        <h3>📚 دعم دراسي ومشاريع</h3>
        <p>مساعدة الطلاب في مشاريعهم الدراسية وتقديم استشارات تقنية.</p>
      </div>
      <div class="box">
        <h3>🔧 ورش العمل التقنية</h3>
        <p>ورش عمل تدريبية في مجالات مثل الإلكترونيات وصيانة الأجهزة.</p>
      </div>
      <div class="box">
        <h3>🎮 الألعاب التعليمية</h3>
        <p>تصميم ألعاب تعليمية لتنمية مهارات التفكير والإبداع.</p>
      </div>
    </div>
  </section>

  <section class="relax-zone">
    <h2>قاعة تعليمية - لراحة الطلاب </h2>
    <p>في <strong>تكنو أجيال</strong>، نحرص على توفير بيئة مريحة وداعمة للطلاب . نقدم مجموعة من الخيارات التي تساعد في خلق جو من الراحة والاسترخاء خلال فترة التدريب.</p>
    <ul>
      <li>☕    توفير إنترنت و كهرباء على مدار الساعة
        <div class="details">
          <p> نقدم خدمة الكهرباء  و الأنترنت للطلاب بأسعار مناسبة</p>
        </div>
      </li>
      <li>🪑 أماكن مخصصة للاستراحة والجلوس لأهالي الطلاب
        <div class="details">
          <p>توجد أماكن مريحة لأهالي الطلاب للجلوس والاسترخاء أثناء انتظار أبنائهم.</p>
        </div>
      </li>
      <li>📶 إنترنت مجاني لتسهيل العمل أو التصفح أثناء انتظار الطلاب
        <div class="details">
          <p>نحن نوفر خدمة الإنترنت المجاني لضمان راحة الأهالي وتمكينهم من العمل أو التصفح بسهولة أثناء انتظار الطلاب.</p>
        </div>
      </li>
      <li>💬 جلسات دعم استشارية لتوجيه الأهالي ومساعدتهم في دعم أبنائهم أكاديمياً
        <div class="details">
          <p>نقدم جلسات استشارية للأهالي لتوجيههم ومساعدتهم في كيفية دعم أبنائهم أكاديمياً، مما يعزز من دورهم في تعليمهم.</p>
        </div>
      </li>
    </ul>
  </section>



  <?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>  
</html>
