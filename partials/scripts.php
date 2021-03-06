<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
<!-- Required datatable js -->
<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/datatables/dataTables.buttons.min.js"></script>
<script src="assets/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/datatables/jszip.min.js"></script>
<script src="assets/datatables/pdfmake.min.js"></script>
<script src="assets/datatables/vfs_fonts.js"></script>
<script src="assets/datatables/buttons.html5.min.js"></script>
<script src="assets/datatables/buttons.print.min.js"></script>

<!-- Key Tables -->
<script src="assets/datatables/dataTables.keyTable.min.js"></script>

<!-- Responsive examples -->
<script src="assets/datatables/dataTables.responsive.min.js"></script>
<script src="assets/datatables/responsive.bootstrap4.min.js"></script>

<!-- Init Data Tables -->
<script>
    $(document).ready(function() {

        /* Data Tables */
        $('#dt').DataTable();

        /* Export TABLES */
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });


        table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
    /* Prevent Double Resubmissions */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<!-- Sweet Alerts -->
<script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Init Alerts -->
<!-- Init Sweet Alerts -->
<?php if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        Swal.fire({
            title: 'Success',
            html: '<?php echo $success; ?>',
            timer: 2500,
            type: "success",
            showConfirmButton: false,
            onBeforeOpen: () => {
                timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                }, 1000)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('<?php echo $success; ?>')
            }
        })
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        Swal.fire({
            title: 'Failed',
            html: '<?php echo $err; ?>',
            timer: 2500,
            type: "error",
            showConfirmButton: false,
            onBeforeOpen: () => {
                timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                }, 1000)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('<?php echo $err; ?>')
            }
        })
    </script>

<?php }
if (isset($info)) { ?>
    <script>
        Swal.fire({
            title: 'Failed',
            html: '<?php echo $info; ?>',
            timer: 2500,
            type: "info",
            showConfirmButton: false,
            onBeforeOpen: () => {
                timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                }, 1000)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('<?php echo $info; ?>')
            }
        })
    </script>

<?php }
