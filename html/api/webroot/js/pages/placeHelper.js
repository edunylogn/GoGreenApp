var PlaceJsHelper = (function () {
    var api_base = '/api/';
    function asignEvents(){
        loadPreviewImage('#new-image', '#new-image-preview');
        callMethodAndRepaint(actionAddImage());
        callMethodAndRepaint(actionDeleteImage());
        toogleContent('.room-cat-expand');

        $('.datetimepicker-field').datetimepicker({
            useCurrent: true,
            minDate: new Date(),
            format: 'DD/MM/YYYY'
        });
    }
    function actionAddImage(){
        return {
            container: '.cell-images-container',
            btn: '.btn-img-add',
            url: api_base + 'images/addImageToPlace',
            data: function(){
                var formData = new FormData();
                formData.append('place_id', $(this.container).data('place-id'));
                formData.append('image', $('#new-image')[0].files[0]);
                return formData;
            },
            settings: {
                contentType: false,
                processData: false
            }
        }
    }
    function actionDeleteImage(){
        return {
            container: '.cell-images-container',
            btn: '.btn-img-remove',
            url: api_base + 'images/deleteImageFromPlace',
            data: function(target){
                return {
                    'place_id': $(this.container).data('place-id'),
                    'image_id': $(target).data('image-id')
                }
            }
        }
    }

    function loadPreviewImage(input, imgTag) {
        $(document).on('change', input, function (e) {
            showLoading(true);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    showLoading(false);
                    $(imgTag).attr('src', e.target.result);
                    $(imgTag).closest('.image-preview-container').fadeIn();
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
        $(document).on('click', '.btn-img-cancel', function(){
            $(imgTag).closest('.image-preview-container').fadeOut(300, null, function(){
                $(imgTag).attr('src', '#');
                $(input).val('');
            });
        })
    }
    //
    function toogleContent($el) {
        $($el).click(function (e) {
            e.preventDefault();
            var data = $(this).data();
            if(data.expanded == 0){
                $('.'+data.expand).fadeIn();
                $(this).data('expanded', 1);
                $(this).find('i').removeClass('fa-expand').addClass('fa-compress');
            }else{
                $('.'+data.expand).fadeOut();
                $(this).data('expanded', 0);
                $(this).find('i').removeClass('fa-compress').addClass('fa-expand');
            }
        });
    }
    // Load preview of file input
    function callMethodAndRepaint(options) {
        $(document).on('click', options.btn, function (e) {
            showLoading(true);
            e.preventDefault();
            $.ajax($.extend(options.settings, {
                type: options.method || "POST",
                url: options.url,
                data: options.data(e.target),
                success: function (response) {
                    showLoading(false);
                    var json = JSON.parse(response);
                    if(json.result_el){
                        $(options.container).fadeOut(300, null, function(){
                            $(this).replaceWith(json.result_el).fadeIn();
                            if(json.msg_el)
                                $(options.container).find('.alert-container').html(json.msg_el);
                        });
                    }else if(json.msg_el){
                        $(options.container).find('.alert-container').html(json.msg_el);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                }
            }));
        });
    }
    //
    return {
        init: function () {
            asignEvents();
        }
    }
})();

$(function(){
    PlaceJsHelper.init();
});