<!doctype html>
<html lang="en">
<?php echo $__env->make('listing-layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="container-fluid">
    <!-----------logo-------->
<?php echo $__env->make('listing-layout.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-----------logo end-------->
    <hr>
    <?php echo $__env->yieldContent('content'); ?>
</div>
<!-- Optional JavaScript -->
<?php echo $__env->make('listing-layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
    const api_url = "<?php echo e(env('API_URL')); ?>";
    const base_url = "<?php echo e(env('BASE_URL')); ?>";
    const public_url = "<?php echo e(asset('/')); ?>";
    var token = localStorage.getItem("user_token");

    if (token == '' || token == undefined || token == null || token == 'null') {
        <?php if(session()->has('user')): ?>
        localStorage.setItem('user_token', "<?php echo e(session()->get('user_token')); ?>");
        <?php endif; ?>
        // window.location.assign = base_url + 'home';
    }

    function ajax_setup() {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer ' + token ?? "",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
        });
    }

    $(document).ready(function () {
        ajax_setup();
    });
</script>
<?php echo $__env->yieldContent('page_scripts'); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/listing-layout/master.blade.php ENDPATH**/ ?>