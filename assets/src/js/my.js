$(document).ready(function(){
  //скрол по ярлыкам 
 
$(document).on("click", "nav a", function(e) {
    e.preventDefault();
    var id  = $(this).attr('href');
    var top = $(id).offset().top; // получаем координаты блока
    $('body, html').animate({scrollTop: top}, 800); // плавно переходим к блоку
});


//валидация
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // обработка ошибки формы...
    } else {
        // все в порядке!
        event.preventDefault();
        submitForm();
    }
});
function submitForm(){
    // Инициируем переменную с содержимым формы
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "mail.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}

});