
$(document).ready(function() {
    $(".link").on("click", function(e){
        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
        $.ajax({
            type : "GET",
            data: arr,
            url: "index.php",
            success : function(data){
                $("#ajaxx").html(data);
                console.log("coucou");
            }
        });
    });
});
