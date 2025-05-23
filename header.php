<script>
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
</script>
<header class="main-header">
  <div class="container d-flex justify-content-between align-items-center">
    <a href="index.php"><img src="images/icon1.png" alt="Logo"></a>
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active"></a>


    <nav class="d-none d-md-block">
      <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="index.php">الرئيسية</a></li>
        <li class="nav-item"><a class="nav-link" href="studingLevels.php">المراحل الدراسية</a></li>
        <li class="nav-item"><a class="nav-link" href="teachers.php">المعلمون</a></li>
        <li class="nav-item"><a class="nav-link" href="coursesSection.php">قسم التدريب</a></li>
        <li class="nav-item"><a class="nav-link" href="techno_page.php">تكنو أجيال</a></li>
         <li class="nav-item"><a class="nav-link" href="print_page.php">الطباعة </a></li>
        <li class="nav-item"><a class="nav-link" href="conectus.php">اتصل بنا</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">حول</a></li>        

        <a href="login.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block"> تسجيل الدخول </i></a>

      </ul>
    </nav>

    <div class="dropdown d-block d-md-none">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        القائمة
      </button>
      <ul class="dropdown-menu text-end">
        <li><a class="dropdown-item" href="index.php">الرئيسية</a></li>
        <li><a class="dropdown-item" href="studingLevels.php">المراحل الدراسية</a></li>
        <li><a class="dropdown-item" href="teachers.php">المعلمون</a></li>
        <li><a class="dropdown-item" href="coursesSection.php">قسم التدريب</a></li>
        <li><a class="dropdown-item" href="print_page.php">الطباعة والتدوير</a></li>
        <li><a class="dropdown-item" href="techno_page.php">تكنو أجيال</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="login.php">تسجيل دخول</a></li>
        <li><a class="dropdown-item" href="sign_up.php"> انشاء حساب</a></li>
    
        
      </ul>
    </div>
  </div>
</header>