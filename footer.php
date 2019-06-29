<!-- Jquery Core Js -->
<script src="bootstrap/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="bootstrap/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->


<!-- Slimscroll Plugin Js -->
<script src="bootstrap/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="bootstrap/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="bootstrap/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="bootstrap/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="bootstrap/plugins/dropzone/dropzone-amd-module.js"></script>

<!-- Custom Js -->
<script src="bootstrap/js/admin.js"></script>
<script src="bootstrap/js/pages/tables/jquery-datatable.js"></script>
<script src="bootstrap/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="bootstrap/js/demo.js"></script>
<script>
    let invalidChars = ["-", "e", "+", "E"];

    $("input[type='number']").on("keydown", function (e) {
        if (invalidChars.includes(e.key)) {
            e.preventDefault();
        }
    })

    $('[name="jab_fungsional"]').on("change", function () {
        if ($(this).val() === "Lektor Kepala" || $(this).val() === "Profesor") {
            if ($('li#appended').length === 0) {
                $('#sidebarmenu').append('<li id="appended">' +
                    '<a href="kewajiban_khusus.php">' +
                    '<i class="material-icons">assignment</i>' +
                    '<span>Kewajiban Khusus</span>' +
                    '</a></li>');
            }
        }
        else{
            console.log($('li#appended'));
            if ($('li#appended').length > 0) {
                $('li#appended').remove();
            }
        }
    })

</script>
</body>

</html>
