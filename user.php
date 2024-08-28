<?php     
if(isset($_POST['textdata']))
{
$data=$_POST['textdata']."\r\n";
$fp = fopen('data.txt', 'a');
fwrite($fp,$data);
fclose($fp);
echo '<script>alert("Thanks For Subcribe Us")</script>';
echo("<script>window.history.back()</script>");
}

