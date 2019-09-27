    <?php
        session_start(); 
        include 'library/functions.php'; //memanggil file functions.php pada folder library
        include 'library/config_database.php'; //memanggil file config_database.php pada folder
       
     ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
     <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="css/duallistbox/bootstrap-duallistbox.min.css">
    <!-- cropper CSS
        ============================================ -->
    <link rel="stylesheet" href="css/cropper/cropper.min.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- forms CSS advance
        ============================================ -->
    <link rel="stylesheet" href="css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/datetimepicker.css">
    <link rel="stylesheet" href="css/bootstrap-editable.css">
    <link rel="stylesheet" href="css/x-editor-style.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/charts.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="css/duallistbox/bootstrap-duallistbox.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="css/alerts.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="css/form.css">
  <?php
    

    if(isset($_SESSION['user_online'])){
        
    }else{
      gotoRedirect("login.php",0);
      echo var_dump($_SESSION['user_online']['username']);
    }
  ?>