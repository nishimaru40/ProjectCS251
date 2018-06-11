
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lucifer Apartment</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <?php
        include("photoCtrl.php");
        $photo = new photoCtrl;
        if(isset($_POST['summit'])){

          $file_name = $_FILES['file']['name'];
          $file_type = $_FILES['file']['type'];
          $file_size = $_FILES['file']['size'];
          $file_tem_Loc = $_FILES['file']['tmp_name'];
          $file_store = "images/".$file_name;
          $photo->update($file_store);

          if(move_uploaded_file($file_tem_Loc,$file_store)){
            echo "Files are Uploaded";
          }

         }
        ?>

            <div align="center"><img class="logo" src="img/example_logo.jpg" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Admin Management</div>
            <div id="form-message" class="message hide">
            </div>
            <CENTER> <a href ="table.php"> ตรวจสอบรายชื่อผู้จอง </a></CENTER> <br>
            <CENTER> Increase Advertisement (.jpg / .png / .gif) #รูปจะถูกไปโชว์ที่หน้าHome </CENTER> <br>
   

            <form action = "?" method = "POST" enctype = "multipart/form-data">
              <p><input type="file" name="file"/></P>
              <p><input type="submit" name="summit" value ="summit"></p>
            </form>

            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
