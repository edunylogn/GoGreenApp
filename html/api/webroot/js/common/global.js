var GlobalJsHelper = (function () {
    function asignEvents(){
        $('.datetimepicker-field').datetimepicker({
            useCurrent: true,
            minDate: new Date(),
            format: 'DD/MM/YYYY'
        });
        $("form").submit(function(){
            showLoading(true);
        });
    }
    return {
        init: function () {
            asignEvents();
        }
    }
})();

$(function(){
    GlobalJsHelper.init();
});