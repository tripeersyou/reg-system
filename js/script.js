$(document).ready(function(){
    $('#year').val("1");
    $('#id_number').focus();
    $('#id_number').keyup(function(){
        var textbox = $(this);
        var value = textbox.val();
        $.ajax({
        method:'GET',
        url:'retrieve.php',
        data:{id : value},
        dataType: 'json',
        success: function(member){
            if (member != null){
                if(member.name == "Already Registered"){
                    $('#warning').text(member.name + "!");
                }else {
                    $('#warning').text("");
                    $('#name').val(member.name);
                    $('#nick_name').val(member.nickname);
                    $('#course').val(member.course);
                    $('#mobile').val(member.mobile);
                    $('#year').val(member.year);
                    $('#email').val(member.email);
                    $('#bday').val(member.bday);
                    // $('input:radio[name=type][value='+member.scholar+']').click();
                }
            } else {
                $('#warning').text("");
                $('#name').val("");
                $('#nick_name').val("");
                $('#course').val("");
                $('#mobile').val("");
                $('#year').val("");
                $('#email').val("");
                $('#bday').val("");
                // $('input:radio[name=type][value='+member.scholar+']').click();
            }
        }
        });
    });
});