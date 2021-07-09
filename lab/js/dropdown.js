$(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropogation();
        e.preventDefault();
    });
});
