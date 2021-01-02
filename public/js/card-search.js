$(document).ready(function(){
    filter_search();
});

function filter_search() {
    $(".card-search").on("input", function() {
        let value = $(this).val().toLowerCase();
        $(".item .filter").filter(function() {
            $(this).closest('.item').toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
