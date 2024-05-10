<?php
include '../dbcon.php';
	if(isset($_POST['convert'])) {
		$png_file = $_FILES['png_file']['tmp_name'];
		$svg_file = "converted_file.svg";

		if(file_exists($png_file)) {
			$image = imagecreatefrompng($png_file);
			$width = imagesx($image);
			$height = imagesy($image);

			$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="'.$width.'" height="'.$height.'">';
			$svg .= '<rect x="0" y="0" width="'.$width.'" height="'.$height.'" fill="none"/>';

			for($y = 0; $y < $height; $y++) {
				for($x = 0; $x < $width; $x++) {
					$rgb = imagecolorat($image, $x, $y);
					$colors = imagecolorsforindex($image, $rgb);
					$r = $colors['red'];
					$g = $colors['green'];
					$b = $colors['blue'];
					$opacity = round(1 - ($colors['alpha'] / 127), 2);

					$svg .= '<rect x="'.$x.'" y="'.$y.'" width="1" height="1" fill="rgba('.$r.','.$g.','.$b.','.$opacity.')" />';
				}
			}

			$svg .= '</svg>';

			file_put_contents($svg_file, $svg);

			header('Content-Description: File Transfer');
			header('Content-Type: image/svg+xml');
			header('Content-Disposition: attachment; filename="'.basename($svg_file).'"');
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: '.filesize($svg_file));
			ob_clean();
			flush();
			readfile($svg_file);
			unlink($svg_file);
			exit;
		}
		else {
			$error_msg = "Error: Please upload a PNG file.";
		}
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
  <meta name="description" content="Convert PNG to SVG online with <?php echo $app_name; ?> - a free and user-friendly image converter tool. No software download required. Get fast and high-quality conversion. Start using it now for free!">
  
  
  <title>Convert PNG to SVG Online - Free Image Converter Tool | <?php echo $app_name; ?></title>
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
                <strong>PNG ➡️ SVG</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="#" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler mx-auto">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        Upload your PNG file&nbsp;🖼️</p>
                        <?php if(isset($error_msg)){?> <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        <?php echo $error_msg.' '.'🤐'; ?></p> <?php } ?>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="file" name="png_file" accept=".png" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form7-5" required>
                        </div>
                        
                        
                        <div class="col-auto mbr-section-btn align-center"><button type="submit" name="convert" class="btn btn-secondary display-4">Upload&nbsp;⬆️ and Convert 📁</button></div>
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
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><div>Convert PNG to SVG Online - Free Image Converter Tool</div><div>
</div><div>
</div></h4>
                <p class="mbr-text mbr-fonts-style display-7">Convert PNG to SVG online with <?php echo $app_name; ?> - a free and user-friendly image converter tool. No software download required. Get fast and high-quality conversion. Start using it now for free!&nbsp;<br></p>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content5 cid-tBnJOt4ofr" id="content5-i">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Why should you convert PNG to SVG?</h4>
                <p class="mbr-text mbr-fonts-style display-7">There are several things that you cannot accomplish with a PNG file. You cannot, for instance, have it printed by a professional. A professional printing shop won't accept PNG files because they lack CMYK colour information.<br><br>PNG files also have transparency spaces. This permits the image to have pixels that are entirely empty. These empty spaces might be filled with black or white pixels if you try to print a PNG or upload it to specific websites, which would drastically alter the way the image appears.<br><br>This is why it could be beneficial to convert a PNG to a JPG. Transparency is not supported by JPG files, therefore you'll be able to see exactly how an upload will appear before you.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="../assets/smoothscroll/smooth-scroll.js"></script>  
<script src="../assets/ytplayer/index.js"></script>  
<script src="../assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="../assets/theme/js/script.js"></script>  
<script src="../assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>