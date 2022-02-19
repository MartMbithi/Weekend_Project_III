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
            timer: 1500,
            type: "success",
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
            timer: 1500,
            type: "error",
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
            timer: 1500,
            type: "info",
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
