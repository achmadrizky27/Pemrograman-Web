$(document).ready(function () {
    $("#send-btn").on("click", function () {
        $value = $("#data").val();
        $msg =
            '<div class="user-inbox inbox border border-2 p-2"><div class="msg-header"><i class="fas fa-user fw-semibold"> User Mahasiswa/i</i><p>' +
            $value +
            "</p></div></div>";
        $(".form").append($msg);
        $("#data").val("");

        $.ajax({
            url: "php/main/message.php",
            type: "POST",
            data: "text=" + $value,
            success: function (result) {
                $replay =
                    '<div class="bot-inbox inbox border border-2 p-2"><div class="icon fw-semibold"><i class="fas fa-user"> Hotline Lab</i></div><div class="msg-header"><p>' +
                    result +
                    "</p></div></div><br>";
                $(".form").append($replay);
                $(".form").scrollTop($(".form")[0].scrollHeight);
            },
        });
    });
});
