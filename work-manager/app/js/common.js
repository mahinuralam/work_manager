// Toggle the side navigation
$("#sidebarToggle, #sidebarToggleTop").on('click', function (e) {
    if ($("#sideBar").hasClass("d-none")) {
        $('#sideBar').removeClass('d-none');
        $('#sideBar').addClass('d-block');
        $('#mainPanel').removeClass('col-12');
        $('#mainPanel').addClass('col-8');
    } else if ($("#sideBar").hasClass("d-block")) {
        $('#sideBar').removeClass('d-block');
        $('#sideBar').addClass('d-none');
        $('#mainPanel').removeClass('col-8');
        $('#mainPanel').addClass('col-12');
    };
});

//Tooptip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})