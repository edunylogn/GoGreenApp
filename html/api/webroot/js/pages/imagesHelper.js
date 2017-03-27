var ImagesJsHelper = (function () {
    function asignEvents(){
        loadPreviewImage('#image', '#blah');
    }
    // Load preview of file input
    function loadPreviewImage(input, imgTag) {
        $(input).change(function(){
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(imgTag).attr('src', e.target.result).fadeIn();
                }
                reader.readAsDataURL(this.files[0]);
            }
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
    ImagesJsHelper.init();
});