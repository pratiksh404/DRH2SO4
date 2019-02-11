$(document).ready(function () {
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');

    allWellsExceptFirst.hide();
    navItems.click(function (e) {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});

$(document).ready(function () {
    $(this).on('click', '.expandMenu1', function () {
        $(this).addClass('.clickHighlight');
        $('.subMenu1').toggle(1000);
    });
});

$(document).ready(function () {
    $(this).on('click', '.expandMenu2', function () {
        $(this).addClass('.clickHighlight');
        $('.subMenu2').toggle(1000);
    });
});

$(document).ready(function () {
    $(this).on('click', '.expandMenu3', function () {
        $(this).addClass('.clickHighlight');
        $('.subMenu3').toggle(1000);
    });
});
