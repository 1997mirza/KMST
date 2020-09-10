<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pristupna forma</title>
</head>
<body style="background: #181818;">



    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto" >
                <div class="card  mt-5" style="border-style: solid;
  border-color: #2d3194;border-width: 5px; background-color: white;border-radius: 25px;" >
                    <div class="card-title bg-primary text-white mt-5"  >
                        <img src="kmstlogo.jpg" style="max-width:100%; ">
                    </div>

                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input style="border-style: solid; border-color: #2d3194; "type="text" name="UName" placeholder="User Name" class="form-control mb-3">
                            <input style="border-style: solid;border-color: #2d3194;" type="password" name="Password" placeholder="Password" class="form-control mb-3">
                            <button style="background-color: #2d3194; color:white; float: right; " class="btn mt-3" name="Login">Prijava</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>