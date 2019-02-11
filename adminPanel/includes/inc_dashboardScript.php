$(function(){

$(document).ready(function() {
$('#table_id').DataTable({
dom: 'Bfrtip',
colReorder: true,
stateSave: true,
responsive: true,
select : true,
      columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]],
buttons: [

{

extend: 'copy',
text: 'Copy to clipboard',
lengthMenu: [
[ 10, 25, 50, -1 ],
[ '10 rows', '25 rows', '50 rows', 'Show all' ]
],
}, 'pdf','pageLength',
{
extend: 'print',
text: 'Print all (not just selected)',
exportOptions: {
modifier: {
selected: null
}
}
},
'colvis'
]

});
});

$(document).ready(function() {
$("#tabs").tabs();
});

});







var Dashboard = function () {
var global = {
menuClass: ".c-menu"
};

var menuChangeActive = function menuChangeActive(el) {
var hasSubmenu = $(el).hasClass("has-submenu");
$(global.menuClass + " .is-active").removeClass("is-active");
$(el).addClass("is-active");

// if (hasSubmenu) {
// $(el).find("ul").slideDown();
// }
};

var sidebarChangeWidth = function sidebarChangeWidth() {
var $menuItemsTitle = $("li .menu-item__title");

$("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
$(".hamburger-toggle").toggleClass("is-opened");


};

return {
init: function init() {
$(".js-hamburger").on("click", sidebarChangeWidth);

$(".js-menu li").on("click", function (e) {
menuChangeActive(e.currentTarget);
});


}
};
}();

Dashboard.init();
//# sourceURL=pen.js
