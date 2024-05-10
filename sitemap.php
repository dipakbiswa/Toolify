<?php
include 'dbcon.php';
// Create an array of URLs to include in the sitemap
$urls = array(
    "https://<?php echo $app_url; ?>/",
    "https://<?php echo $app_url; ?>/tools",
    "https://<?php echo $app_url; ?>/about",
    "https://<?php echo $app_url; ?>/imagetools/pngtojpg",
    "https://<?php echo $app_url; ?>/imagetools/jpgtopng",
    "https://<?php echo $app_url; ?>/imagetools/pngtowebp",
    "https://<?php echo $app_url; ?>/imagetools/webptopng",
    "https://<?php echo $app_url; ?>/imagetools/svgtopng",
    "https://<?php echo $app_url; ?>/imagetools/pngtosvg",
    "https://<?php echo $app_url; ?>/imagetools/image-color-picker",
    "https://<?php echo $app_url; ?>/webtools/css-minify"
);

// Set the content type to XML
header("Content-Type: application/xml; charset=utf-8");

// Output the XML sitemap
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($urls as $url) {
    echo '<url>';
    echo '<loc>' . $url . '</loc>';
    echo '<changefreq>weekly</changefreq>';
    echo '</url>';
}

echo '</urlset>';
?>
