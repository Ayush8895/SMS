<html>
<head>
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>  
    
        h1{  
        color:white;  
        text-align: center;
        background-color:rgb(0, 255, 128);  
        padding:15px;  
    
        }  
        h2{
            background-color:rgb(241, 240, 145);  
            text-align: center;
        }
      div
{

animation:trans 2s ease-in-out ;

}

@keyframes  demo
{
 0% {background:red;}
 50% {background:yellow; width:100px; height:100px;}
 100% {background:green; width:100px; height:100px;}
}
@keyframes  trans
{
 0% {transform:translate(200px) scale(2) ;}
 50% {transform:translate(0px) scale(1) ;}
 100% {transform:translate(0px) scale(1) ;}
}
    </style>  
</head>
<body>
    
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Delhi Public School</h1>
        </div>
    </div>
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>


</body>
</html><?php /**PATH C:\xampp\htdocs\StudentManagement\resources\views/students/layout.blade.php ENDPATH**/ ?>