<?php
include '../dbcon.php';
if(isset($_POST['convert'])){
// Get the unminified CSS code from the user
$unminified_css = $_POST['css'];

// Remove all comments
$minified_css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $unminified_css);

// Remove all unnecessary whitespace
$minified_css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minified_css);

// Output the minified CSS code
$minify = $minified_css;
}
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!--<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">-->
  <meta name="description" content="CSS Minify is a tool that allow you to minify CSS code. It's the simplest and quickest method for optimizing css code from large files. Web developpers frequently want to minify their css code. This tool can be used on any device, including Android, Windows, Linux, and iOS through <?php echo $app_name; ?>.">
  
  
  <title>The Ultimate CSS Minifier for Optimized Web Performance | <?php echo $app_name; ?></title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <?php include 'nav.php'; ?>

<section data-bs-version="5.1" class="form7 cid-tBmGL50ESV" id="form7-5">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>CSS Minify&nbsp;⏩</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="#" method="POST" class="mbr-form form-with-styler mx-auto">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                    CSS Minify&nbsp;⏩</p>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <textarea type="file" name="css" placeholder="Raw CSS" rows="10" data-form-field="name" class="form-control" value="" id="name-form7-5" required></textarea>
                        </div>
                        
                        
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" name="convert" class="btn btn-secondary display-4">Minify ⬇️</button>
                        </div>
                        <br><br><br>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <textarea type="file" placeholder="Minified CSS" data-form-field="name" rows="10" class="form-control" value="<?php if(isset($minify)){ echo $minify; } ?>" id="name-form7-5"></textarea>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content5 cid-tBmHg1sAbw" id="content5-6">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><div><?php echo $app_name; ?> - The Ultimate CSS Minifier for Optimized Web Performance</div><div>
</div><div>
</div></h4>
                <p class="mbr-text mbr-fonts-style display-7">CSS Minify is a tool that allow you to minify CSS code. It's the simplest and quickest method for optimizing css code from large files. Web developpers frequently want to minify their css code. This tool can be used on any device, including Android, Windows, Linux, and iOS through <?php echo $app_name; ?>.&nbsp;<br></p>
            </div>
        </div>
    </div>
</section>

<!--<section data-bs-version="5.1" class="content5 cid-tBnJOt4ofr" id="content5-i">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Why should you convert PNG to SVG?</h4>
                <p class="mbr-text mbr-fonts-style display-7">There are several things that you cannot accomplish with a PNG file. You cannot, for instance, have it printed by a professional. A professional printing shop won't accept PNG files because they lack CMYK colour information.<br><br>PNG files also have transparency spaces. This permits the image to have pixels that are entirely empty. These empty spaces might be filled with black or white pixels if you try to print a PNG or upload it to specific websites, which would drastically alter the way the image appears.<br><br>This is why it could be beneficial to convert a PNG to a JPG. Transparency is not supported by JPG files, therefore you'll be able to see exactly how an upload will appear before you.</p>
            </div>
        </div>
    </div>
</section>-->

<?php include 'footer.php'; ?>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="../assets/smoothscroll/smooth-scroll.js"></script>  
<script src="../assets/ytplayer/index.js"></script>  
<script src="../assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="../assets/theme/js/script.js"></script>  
<script src="../assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>