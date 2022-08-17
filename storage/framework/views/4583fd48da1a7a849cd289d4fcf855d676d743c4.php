

    <?php $__env->startComponent('components.dropdown'); ?>

    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('components.button'); ?>

    <?php echo $__env->renderComponent(); ?>

    <html>
        
<head>
   
    


</head>

<body>
    <h3>Please, select an option</h3>

    <button id="select-btn" link rel="stylesheet" href="index.css">Selection</button> 
    <button id="no-select-btn" link rel="stylesheet" href="index.css">No selection</button>

<div id="show-selection">Hola mundo</div>

    <script>
        document.getElementById("select-btn").onclick = function(){
       console.log("The select button has been clicked")
    
       document.getElementById("show-selection").style.display = "";
     }

     document.getElementById("no-select-btn").onclick = function(){
       console.log("The select button has not been clicked")
    
    document.getElementById("show-selection").style.display = 'none';
     }
     </script>

</body>



</html><?php /**PATH C:\xampp\htdocs\sample-app\laravel9\resources\views/welcome.blade.php ENDPATH**/ ?>