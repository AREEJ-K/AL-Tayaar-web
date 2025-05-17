<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $destinationFrom = htmlspecialchars($_POST['destinationFrom'] ?? '');
    $destinationTo = htmlspecialchars($_POST['destinationTo'] ?? '');
    $notes = htmlspecialchars($_POST['notes'] ?? '');

    if ($name && $phone && $email && $destinationFrom && $destinationTo) {
        $to = "K.alqattan@altayyar-international.com, Ahmed.elbasouny@altayyar-international.com, 
        Mohammad.javeed@altayyar-international.com";
        $subject = "New Booking Request";
        $message = "Name: $name\nPhone: $phone\nEmail: $email\nFrom: $destinationFrom\nTo: $destinationTo\nNotes: $notes";
        

        if (mail($to, $subject, $message, $headers)) {
            echo "تم إرسال طلب الحجز بنجاح!";
        } else {
            echo "حدث خطأ أثناء إرسال طلب الحجز.";
        }
    } else {
        echo "الرجاء ملء جميع الحقول المطلوبة.";
    }
}
?>
