$('li.dialog__item.j-dialog__item').click(function () {
    $('li.dialog__item.j-dialog__item').removeClass('selected');
    $(this).addClass('selected');
    $('.sidebar').removeClass('active');
    $('.chatinitialone').hide();
    $('.chatinitialtwo').show();
    var conname = $(this).data("conname");
    var conemail = $(this).data("conemail");
    var conpnum = $(this).data("conpnum");
    var conmsg = $(this).data("conmsg");
    var contime = $(this).data("contime");
    $('.dis-con-name').text(conname);
    $('.dis-con-email').text(conemail);
    $('.dis-con-pnum').text(conpnum);
    $('.dis-con-msg').text(conmsg);
    $('.dis-con-time').text(contime);
    $('.dis-email').attr("href", "mailto:"+conemail);
    $(this).find('.dialog_unread_counter').text('');
});
$('button.open_sidebar.j-open_sidebar').click(function () {
    $('li.dialog__item.j-dialog__item').removeClass('selected');
    $('.sidebar').addClass('active');
    $('.chatinitialtwo').hide();
    $('.chatinitialone').show();
});