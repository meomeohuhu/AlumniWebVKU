
$(document).ready(function() {
    $(".datepicker").datepicker({
        dateFormat: "dd/mm/yy", // Định dạng ngày
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:2024", // Giới hạn năm chọn
    });
});
