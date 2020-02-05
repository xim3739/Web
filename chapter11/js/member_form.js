$(document).ready(function () {

    let inputId = $('#inputId');
    let idSubMsg = $('#idSubMsg');

    inputId.blur(function() {

        let inputIdValue = inputId.val();
        let exp = /^[a-zA-Z0-9]{6,12}$/;

        if(inputIdValue === "") {

            idSubMsg.html("<span style='color:red'>아이디 입력 요망</span>");

        } else if(exp.text(inputIdValue)) {

            idSubMsg.html("<span style='color:red'>형식 오류</span>");

        } else {
            $.ajax({
                type: "POST",
                url: "./member_checkId.php",
                data: {"inputId" : inputIdValue},
                success: function (response) {
                    if(response === "1") {
                        idSubMsg.html("<span style='color:red'>아이디 중복</span>");
                    } else if(response === "0"){
                        idSubMsg.html("<span style='color:red'>아이디 사용가능</span>");
                    } else {
                        idSubMsg.html("<span style='color:red'>아이디 에러</span>");
                    }
                }
            });
        }
    });

});