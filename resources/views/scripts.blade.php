<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- InputMask -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" ) }}"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script>
    $(function () {
        $(".textarea").wysihtml5();
        $("[data-mask]").inputmask();
        $('#dt_sigle').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
        });
    });
    document.getElementById("uploadBtn").onchange = function () {
        if( !this.value == '' ){
            document.getElementById("uploadFile").value = this.value;
        }else{
            document.getElementById("uploadFile").value = 'Selecionar Arquivo';
        }
    };
</script>
<!-- myApp -->
{{-- <script src="{{ asset("/js/app.js") }}"></script> --}}