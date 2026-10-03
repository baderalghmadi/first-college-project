<?php
 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
 
<?php include_once './parts/header.php'; ?>
 
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bader Aali AlGhamdi</title>
</head>
<body>
 
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto">
          <img src="images/tvtc.jpg" >
            <h1 class="display-4 fw-normal">اربح مع بدر</h1>
            <p class="lead fw-normal">باقي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
                <ul class="list-group list-group-flush">

<div class="container">
  <h3>شروط الدخول في السحب اتبع ما يلي:</h3>
        <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
        <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
        <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
        <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
        <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
    </ul>
</div>
        </div>
    </div>
 

 <div class="container">

    <div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h3>الرجاء ادخل معلوماتك</h3>

                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الاول</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
                    <div class="form-text error"><?php echo $errors['firstNameError']; ?></div>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">الاسم الاخير</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
                    <div class="form-text error"><?php echo $errors['lastNameError']; ?></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    <div class="form-text error"><?php echo $errors['emailError']; ?></div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
            </form>
        </div>
    </div>
 <br>
    <!-- Button trigger modal -->
   <div class="d-grid gap-2 col-8 col-sm-4 col-md-2 mx-auto">
    <button id="winner" type="button" class="btn btn-primary">
        اختيار الرابح
    </button>
</div>
 
    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>
 
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">الرابح في المسابقة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php foreach ($users as $user) : ?>
                        <h1 class="display-3 text-center modal-title" id="exampleModalLabel">
                            <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?>
                        </h1>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
 
</div>
 <br><br>
<?php include_once './parts/footer.php'; ?>
 






















