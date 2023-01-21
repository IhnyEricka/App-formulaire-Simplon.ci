  
<body class="antialiased">
      <!--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-

900 sm:items-center py-4 sm:pt-0">
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            <a href="http://127.0.0.1:8000/login" class="text-sm 

text-gray-700 dark:text-gray-500 underline">Log in</a>
                         
                                                    <a href="http://127.0.0.1:8000/register" 

class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                         
                       
                                    </div> -->                                  

                                   


<body class="pt-2">

<!-- AFFICHAGE DES DONNEES -->
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Retour</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="/liste">Consulter la liste</a></li>
              </ol>
               <h6 class="font-weight-bolder mb-0">Saisissez vos coordonnées.</h6>
            </nav>
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Formulaire d'enregistrement</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              
          </div>
        </div>





	<div class="row pt-5">
		<div class="col-lg-8 offset-lg-2 col-12 pt-5"> 
        <form method="POST" id="prct" name ="prct" action="<?php echo e(url('insert_entrant')); ?>" enctype="multipart/form-data" files='true' novalidate>
                      <?php echo e(csrf_field()); ?>

                     <!-- debut ligne 1 de la table categorie-->               
		      <div class="form-group">
		          <div class="row">

		            <div class="col-md-6">
		              <label for="nom">Nom</label>
		              <div class="d-flex flex-column text-center <?php echo e($errors->has('lastName') ? 'has-error' : ''); ?>">
                           <input class="control-label " id = "lastName" type="text" placeholder="lastName" name="lastName" required="required" value="<?php echo e(old('lastName')); ?>">
                           <!--affichage du message "obligation de renseigner ce champs" -->
                           <?php echo $errors->first('lastName','<span class= "help-block">:message</span>'); ?>

                           
                      </div> 
		            </div>

		            <div class="col-md-6">
		              <label for="prenom">Prénom</label>
		              <div class="d-flex flex-column text-center <?php echo e($errors->has('firstName') ? 'has-error' : ''); ?>">
                           <input class="control-label " id = "firstName" type="text" placeholder="firstName" name="firstName" required="required" value="<?php echo e(old('firstName')); ?>">
                           <!--affichage du message "obligation de renseigner ce champs" -->
                           <?php echo $errors->first('firstName','<span class= "help-block">:message</span>'); ?>

                      </div>
		            </div>

		          </div>
		      </div>
              
		      <div class="form-group">
		          <div class="row">
		            <div class="col-md-6">
		              <label for="mail">Adresse electronique</label>
		              <div class="d-flex flex-column text-center <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                           <input class="control-label " value="<?php echo e(old('email')); ?>" id = "email" type="email" placeholder="example@yahoo.fr" name="email" required="required">
                           <!--affichage du message "obligation de renseigner ce champs" -->
                           <?php echo $errors->first('email','<span class= "help-block">:message</span>'); ?>

                      </div>

		            </div>                 
		            <div class="col-md-6">
		              <label for="numéro">Numéro</label>
		              <div class="d-flex flex-column text-center <?php echo e($errors->has('phone') ? 'has-error' : ''); ?> required">
                           <input class="control-label " value="<?php echo e(old('phone')); ?>" id = "phone" type="text" placeholder="phone" name="phone" required="required">
                           <!--affichage du message "obligation de renseigner ce champs" -->
                           <?php echo $errors->first('phone','<span class= "help-block">:message</span>'); ?>

                      </div>
		            </div>
		          </div>
		      </div>
		      
		      <div class="form-group">
               <!--div class="col-md-6">
		              <button class="btn btn-primary">S'inscrire</button>
                    </div--> 
                <div class="col-md-12"> 
                      <td class="align-middle text-center">
                          <span> <a href="javascript:void(0)" onclick="document.getElementById('prct').submit();" class="btn btn-success" data-toggle="tooltip" data-original-title="Edit button">
                        Valider</a></span><br>  
                      </td>
		       </div>	 

		      </div>
		      
		    </form>


		</div>
	</div>





    <script>

        let prct = document.getElementById('prct');
        prct.addEventListener('submit', function(e){
            let myInput=document.getElementById('lastName');
            if(myInput.value.trim()==""){
                let myError = document.getElementById('error');
                myError.innerHTML="Remplissez correctement les champs!";
                myError.style.color="red";
                e.preventDefault();
            }
        })
    </script>









    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 

integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 

crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 

integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" 

crossorigin="anonymous"></script>




<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48366846-1', 'gettemplate.com');
  ga('send', 'pageview');
</script>

<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../../../netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>

<script src="../../../maps.googleapis.com/maps/api/js555e?key=&amp;sensor=false&amp;extension=.js"></script>
<script src="assets/js/google-map.js"></script>

<script src="resources/views/app.js"></script>



</body> </body>

</html>

<?php echo $__env->make('layouts.mainhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ihny\aws-proj\app-simplon-form\resources\views/index.blade.php ENDPATH**/ ?>