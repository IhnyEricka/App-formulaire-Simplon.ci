<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">    
<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        <!-- 
                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?> 
                        -->
                    <?php endif; ?>
                </div>
            <?php endif; ?>

<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
<div class="wrapper wrapper--w780">
<div class="card card-3">
<div class="card-heading"></div>
<div class="card-body">
<h2 class="title">Registration Info</h2>
<form method="POST">
<div class="input-group">
<input class="input--style-3" type="text" placeholder="Name" name="name">
</div>
<div class="input-group">
<input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
</div>
<div class="input-group">
<div class="rs-select2 js-select-simple select--no-search">
<select name="gender">
<option disabled="disabled" selected="selected">Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
<div class="select-dropdown"></div>
</div>
</div>
<div class="input-group">
<input class="input--style-3" type="email" placeholder="Email" name="email">
</div>
<div class="input-group">
<input class="input--style-3" type="text" placeholder="Phone" name="phone">
</div>
<div class="p-t-10">
<button class="btn btn--pill btn--green" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<script src="js/global.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78c4e1080f9275dd","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>               
            </div>
        </div>
    </body>
</html>

<?php echo $__env->make('layouts.mainhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ihny\aws-proj\app-simplon-form\resources\views/welcome.blade.php ENDPATH**/ ?>