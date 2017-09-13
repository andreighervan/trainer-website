$.(function ($) {
        var frame=wp.media({
        title:'Select and upload logo',
            button: {
                text: 'Use this media'
            },
        multiple:false
});


$('#aademo_uploadLogoImgBtn').click(function (e) {
    e.preventDefault();
    frame.open();
});
    frame.on('select',function () {
        var attachment=frame.state().get('selection').first().toJSON();
        $('input[name="aademo_inputLogoImg"]').val(attachment.url);
    });
});
