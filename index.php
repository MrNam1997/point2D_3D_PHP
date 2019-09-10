<?php
include_once "Point2D.php";
include_once "Point3D.php";
$testPoint2D = new Point2D(10, 20);
$testPoint3D = new Point3D(10,20,20);
echo var_dump($testPoint2D->getXY());
echo "<br>";
echo $testPoint2D->toString();
echo "<br>";
echo $testPoint3D->toString();
echo "<br>";
echo var_dump($testPoint3D->getXYZ());
