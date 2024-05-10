<!DOCTYPE html>
<html>
<head>
    <title>Image Color Picker Tool</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Image Color Picker Tool</h1>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <br><br>
            <canvas id="canvas" style="width:250px;"></canvas>
            <br><br>
            <label for="color">Selected color:</label>
            <input type="text" name="color" id="color" readonly>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
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
</html>
