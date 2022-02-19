<!-- Jquerry -->
<script src="assets/js/jquery.min.js"></script>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="assets/js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="assets/js/purpose.js"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="assets/js/demo.js"></script>
<!-- Custom Select 2 Bootsrap -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<!-- Sweet Alerts -->
<script src="assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- Dragular -->
<script src="assets/libs/dragula/dist/dragula.min.js"></script>
<!-- Moment Min Js -->
<script src="assets/libs/moment/min/moment.min.js"></script>
<!-- Custom File  -->
<script src="assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Data Tables CDN -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<!-- Floara CDNS -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@4.0.8/js/froala_editor.pkgd.min.js'></script>
<script>
    /* Init Feather Js */
    feather.replace()
    /* Init Custom Select */
    var ss = $(".basic").select2({
        tags: true,
    });
    /* Init Custom File Select */
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
    /* Show Selected File Name */
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("myInput").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    })

    /* Stop Double Resubmission */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script>
    /* Load Multiple Instances Of Froala Editor */
    new FroalaEditor('.summernote', {
        toolbarButtons: ['bold', 'italic'],
        height: 200
    });
</script>
<script>
    /* Initialize Data Tables */
    $(document).ready(function() {
        $('.table').DataTable();
    });

    $(document).ready(function() {
        $('.report_table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $("input[type='number']").inputSpinner()
</script>
<!-- Init Sweet Alerts -->
<?php if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'success',
            title: '<?php echo $success; ?>',
        })
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        /* Pop Error Message */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'error',
            title: '<?php echo $err; ?>',
        })
    </script>

<?php }
if (isset($info)) { ?>
    <script>
        /* Pop Warning  */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'info',
            title: '<?php echo $info; ?>',
        })
    </script>

<?php }
?>