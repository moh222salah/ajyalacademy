<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>المعلمون - مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script> new WOW().init(); </script>
  <link href="css/style.css" rel="stylesheet">
  <link href="images/icon1.png" rel="icon">
  <style>
    .stage-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      cursor: pointer;
      text-align: center;
      position: relative;
      transition: all 0.3s ease;
    }
    .stage-card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .stage-card img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
    }
    .stage-card h5 {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .arrow {
      font-size: 22px;
      color: #fb8c00;
    }
    .teacher-info {
      margin-top: 15px;
      background-color: #fff;
      border-radius: 8px;
      padding: 10px 15px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem; text-align: center; min-height: 50vh;">
  <div class="container text-center">
    <h1 class="display-3 fw-bold" style="color: #fb873f;">المعلمون</h1>
  </div>
</section>

<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
  <div class="row g-4 justify-content-center">

    <!-- معلم 1 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher1">
        <img src="images/icon1.png" alt="معلم">
        <h5>أحمد محمد</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher1">
        <p><strong>رقم الهاتف:</strong> 0599123456</p>
        <p><strong>المواد:</strong> رياضيات، علوم</p>
        <p><strong>ملاحظات:</strong> خبرة 10 سنوات في التعليم</p>
      </div>
    </div>

    <!-- معلم 2 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher2">
        <img src="images/icon1.png" alt="معلمة">
        <h5>سارة علي</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher2">
        <p><strong>رقم الهاتف:</strong> 0599988776</p>
        <p><strong>المواد:</strong> لغة عربية، تربية إسلامية</p>
        <p><strong>ملاحظات:</strong> تهتم بالتعليم النشط</p>
      </div>
    </div>

    <!-- معلم 3 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher3">
        <img src="images/icon1.png" alt="معلم">
        <h5>خالد يوسف</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher3">
        <p><strong>رقم الهاتف:</strong> 0599111223</p>
        <p><strong>المواد:</strong> فيزياء، كيمياء</p>
        <p><strong>ملاحظات:</strong> متخصص بالمرحلة الثانوية</p>
      </div>
    </div>

    <!-- معلم 4 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher4">
        <img src="images/icon1.png" alt="معلمة">
        <h5>نجلاء حسن</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher4">
        <p><strong>رقم الهاتف:</strong> 0599001122</p>
        <p><strong>المواد:</strong> لغة إنجليزية</p>
        <p><strong>ملاحظات:</strong> تركز على مهارات المحادثة</p>
      </div>
    </div>

    <!-- معلم 5 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher5">
        <img src="images/icon1.png" alt="معلم">
        <h5>عمر إبراهيم</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher5">
        <p><strong>رقم الهاتف:</strong> 0599111444</p>
        <p><strong>المواد:</strong> تاريخ، جغرافيا</p>
        <p><strong>ملاحظات:</strong> تبسيط المعلومة بطريقة قصصية</p>
      </div>
    </div>

    <!-- معلم 6 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher6">
        <img src="images/icon1.png" alt="معلمة">
        <h5>ليلى سمير</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher6">
        <p><strong>رقم الهاتف:</strong> 0599556633</p>
        <p><strong>المواد:</strong> علوم حياتية</p>
        <p><strong>ملاحظات:</strong> تستخدم التجارب العلمية في الصف</p>
      </div>
    </div>

    <!-- معلم 7 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher7">
        <img src="images/icon1.png" alt="معلم">
        <h5>مازن عادل</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher7">
        <p><strong>رقم الهاتف:</strong> 0599223344</p>
        <p><strong>المواد:</strong> تكنولوجيا، حاسوب</p>
        <p><strong>ملاحظات:</strong> خبرة في البرمجة للأطفال</p>
      </div>
    </div>

    <!-- معلم 8 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher8">
        <img src="images/icon1.png" alt="معلمة">
        <h5>منى فتحي</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher8">
        <p><strong>رقم الهاتف:</strong> 0599445566</p>
        <p><strong>المواد:</strong> تربية فنية</p>
        <p><strong>ملاحظات:</strong> تهتم بتنمية الإبداع عند الطلاب</p>
      </div>
    </div>

    <!-- معلم 9 -->
    <div class="col-md-4">
      <div class="stage-card" data-bs-toggle="collapse" data-bs-target="#teacher9">
        <img src="images/icon1.png" alt="معلم">
        <h5>فادي ناصر</h5>
        <div class="arrow">&#9660;</div>
      </div>
      <div class="collapse teacher-info" id="teacher9">
        <p><strong>رقم الهاتف:</strong> 0599888777</p>
        <p><strong>المواد:</strong> رياضة</p>
        <p><strong>ملاحظات:</strong> مدرب معتمد في اللياقة المدرسية</p>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
