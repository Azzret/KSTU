$(document).ready(function () {
    $('#date_birth').datepicker({
        format: "dd M yyyy",
        weekStart: 1,
        language: "ru",
        daysOfWeekHighlighted: "0",
        autoclose: true
    });
});