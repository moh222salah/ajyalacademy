<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مركز الأجيال الصاعدة التعليمي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link href="images/icon1.png" rel="icon">
</head>
<body>



  <?php include 'header.php'; ?>

  
    <!-- ترويسة التدريب -->
  <section class="page-header text-white" style="background-image: url('images/carousel-2.jpg'); padding: 5rem 2rem 4rem;
    text-align: center;
    margin-top: 0px;
    min-height: 50vh;">
    <div class="container text-center">
      <h1 class="display-3 fw-bold" style="color: #fb873f; text-align: center;">انشاء حساب</h1>
    
    </div>
  </section>
  <!-- ترويسة التدريب -->


  <!-- Signup Start -->
<div class="container-xxl py-2 mt-4">
    <div class="container" style="padding-top: 10px; padding-bottom: 30px; direction: rtl;">

        <div class="row g-4 wow fadeInUp" data-wow-delay="0.5s ">

            <center>
                <form class="shadow p-4" style="max-width: 550px;">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5" style="color: #fb873f;">إنشاء حساب</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" placeholder="اسم المستخدم">
                                <label for="username">الاسم الكامل</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني">
                                <label for="email">البريد الإلكتروني</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone_number" placeholder="رقم الهاتف">
                                <label for="phone_number">رقم الهاتف</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="كلمة المرور">
                                <label for="password">كلمة المرور</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="confirm_password" placeholder="تأكيد كلمة المرور">
                                <label for="confirm_password">تأكيد كلمة المرور</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-orange w-100 py-3">تسجيل</button>
                        </div>

                        <div class="col-12 text-center">
                            <p>لديك حساب بالفعل؟ <a class="text-decoration-none" href="login.php">تسجيل الدخول</a></p>
                        </div>
                    </div>
                </form>
            </center>

        </div>
    </div>
</div>
<!-- Signup End -->


  
  
  <!-- الفوتر -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  // Wait for the DOM to load
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll("input");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm_password");
    const submitButton = form.querySelector("button[type='submit']");

    // Disable button initially
    submitButton.disabled = true;

    // Check form validity
    function checkForm() {
      let allFilled = true;
      inputs.forEach(input => {
        if (input.value.trim() === "") {
          allFilled = false;
        }
      });

      const passwordsMatch = password.value === confirmPassword.value;

      submitButton.disabled = !(allFilled && passwordsMatch);

      // Optional: Show a visual cue if passwords don't match
      if (confirmPassword.value !== "" && !passwordsMatch) {
        confirmPassword.style.borderColor = "red";
      } else {
        confirmPassword.style.borderColor = "";
      }
    }

    // Add event listeners to all input fields
    inputs.forEach(input => {
      input.addEventListener("input", checkForm);
    });
  });
</script>


</body>
</html>
