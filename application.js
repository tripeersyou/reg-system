$(document).ready(function(){
    $('#id_number').focus();
    $('#id_number').keyup(function(){
        var textbox = $(this);
        var value = textbox.val();
        try{
            $.ajax({
            method:'GET',
            url:'retrieve.php',
            data:{id : value},
            dataType: 'json',
            success: function(member){
                $('#first_name').val(member.first_name);
                $('#last_name').val(member.last_name);
                $('#nick_name').val(member.nickname);
            }
            });
        } catch(e){}
    });
});