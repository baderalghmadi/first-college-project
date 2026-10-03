<?php
// لا تعيد تضمين db.php أو select.php هنا
// هذا الملف فقط يغلق الاتصال والنتيجة الموجودة أصلاً من index.php
if (isset($result) && $result instanceof mysqli_result) {
	mysqli_free_result($result);
}
if (isset($conn) && $conn instanceof mysqli) {
	mysqli_close($conn);
}
?>
