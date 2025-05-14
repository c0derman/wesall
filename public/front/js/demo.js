

 // إضافة تأثيرات بسيطة عند التحميل
 $(document).ready(function() {
    $('.profile-card').each(function(i) {
        $(this).delay(200*i).animate({
            opacity: 1,
            marginTop: "0"
        }, 800);
    });

    $('.selectpicker').selectpicker();
});