<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/

class Figure{
    public function outputSinusoid($image_two, $params) : void
    {

        $image = imagecreatetruecolor(500, 200);
        $colorBg = imagecolorallocate($image, 0,0, 0);
        imagecolortransparent($image, $colorBg);
        $colorSinusoid = imagecolorallocate($image, 255, 0, 0);
        for ($x = 0; $x < 500; $x++) {
            $number = 0;
            while ($params > $number) {
                $y = 85 + (int)($params  * sin((3 * M_PI * $x) / 100));
                imageline($image, $x, $y, $x, $y, $colorSinusoid);
                $number++;
            //usleep(2);
            }
        }
        imagecopy($image_two, $image, 30, 30 ,0, 0, 490, 150);
        imagepng($image_two, "sinus.png");
    }

    function outputLine() : void
    {
        $image = imagecreatetruecolor(200, 200);
        $white = imagecolorallocate($image, 255, 255, 0);
        $bgColor = imagecolorallocate($image, 0, 0, 0);
        for ($x = 0; $x < 300; $x++) {
            $y = (int)(0.8  * $x) - 1;
            imageline($image, $x, $y, $x, $y, $white);
        }
        imagepng($image, "line.png");
    }

    function outputHyperbola() : void
    {
        $image = imagecreatetruecolor(200, 200);
        $white = imagecolorallocate($image, 255, 255, 0);
        $bgColor = imagecolorallocate($image, 0, 0, 0);
        for ($x = 1; $x < 400; $x++) {
            $y = (int)(5000 / $x);
            imagesetpixel($image, $x, $y, $white);
        }
        imagepng($image, "hyperbola.png");
    }

    function outputKUS() : void// Кусочно-заданая функция
    {
        $image = imagecreatetruecolor(200, 200);
        $white = imagecolorallocate($image, 255, 255, 0);
        $bgColor = imagecolorallocate($image, 0, 0, 0);
        for ($x = 1; $x < 400; $x++) {
            if ($x < 100)
            {
                $y = (int)(0.5 * $x);
            }
            else {$y = $x - 50;};
            imagesetpixel($image, $x, $y, $white);
        }
        imagepng($image, "KUS.png");
    }

}

$imageTwo = imagecreatefrompng("2.png");
$params = 25;


$figure = new Figure();
$figure -> outputLine();
$figure -> outputSinusoid($imageTwo, $params);
$figure -> outputHyperbola();
$figure -> outputKUS();

echo "date:".date('H:i:s');
?>

<!doctype html>
<html lang="en" class="0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image</title>
</head>
<body>
    <img src="sinus.png" alt="Circle Image" >
    <img src="line.png" alt="Circle Image" >
    <img src="hyperbola.png" alt="Circle Image" >
    <img src="KUS.png" alt="Circle Image" >

</body>
</html>
