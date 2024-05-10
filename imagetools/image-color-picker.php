<?php include '../dbcon.php'; ?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!--<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">-->
  <meta name="description" content="With our Image to Hex Color Code Converter, you can quickly and easily extract the hex color codes from any image. Simply upload your image and watch as our tool generates a color palette with hex codes for each color in the image. This tool is perfect for designers, developers, and anyone looking to streamline their color selection process. Try our Image to Hex Color Code Converter today and take your color game to the next level!">
  
  
  <title>Image to Hex Color Code Converter - Easily Convert Any Image to a Color Palette | <?php echo $app_name; ?></title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                <strong>Image Color Picker  🖼️</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="#" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler mx-auto">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        Upload your image file&nbsp; 🖼️️</p>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .svg, .gif, .webp" placeholder="Name" data-form-field="name" class="form-control" required>
                        </div>
                        
                        
                        <div class="col-auto mbr-section-btn align-center"><canvas id="canvas" style="width:350px;"></canvas></div>
                        <br><br>
                        <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        Color Code is:️</p>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="color" id="color" placeholder="Color HEX code" data-form-field="name" class="form-control" readonly>
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
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><div>Image to Hex Color Code Converter - Easily Convert Any Image to a Color Palette</div><div>
</div><div>
</div></h4>
                <p class="mbr-text mbr-fonts-style display-7">With our Image to Hex Color Code Converter, you can quickly and easily extract the hex color codes from any image. Simply upload your image and watch as our tool generates a color palette with hex codes for each color in the image. This tool is perfect for designers, developers, and anyone looking to streamline their color selection process. Try our Image to Hex Color Code Converter today and take your color game to the next level!&nbsp;<br></p>
            </div>
        </div>
    </div>
</section>

<!--<section data-bs-version="5.1" class="content5 cid-tBnJOt4ofr" id="content5-i">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Why should you convert JPG to PNG?</h4>
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
<script>
    $(document).ready(function() {
    $("#image").change(function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            var img = new Image();
            img.src = reader.result;
            img.onload = function() {
                var canvas = document.getElementById("canvas");
                var ctx = canvas.getContext("2d");
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0, img.width, img.height);
                $("#canvas").show();
                $("#color").val("");
            };
        };
    });

    $("#canvas").click(function(e) {
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var pixelData = ctx.getImageData(e.offsetX, e.offsetY, 1, 1).data;
        var hex = rgbToHex(pixelData[0], pixelData[1], pixelData[2]);
        $("#color").val(hex);
    });

    function rgbToHex(r, g, b) {
        return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
    }
});

</script>
  
</body>
</html>