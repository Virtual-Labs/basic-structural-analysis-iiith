<?php
$total=0;
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
echo "You answered the following questions correctly : ";
if ($q5==1)
{
$total=$total+1;
echo "5 ";
}
if ($q6==1)
{
$total=$total+1;
echo "6 ";
}
echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";
echo "<br>Total number of correct answers : ".$total."/2";
echo '	<h2>Correct Answers</h2>
<br>
<b>Q5.</b>
                <b>Portal frames can be pinned, hinged or may also be as fixed.</b><br>
                True<br>
                <br>
<b>Q6.</b>                
                <b>The maximum bending moment is at the middle when u.d.l is applied for a fixed portal frame.</b><br>
                True<br>
                <br>
</ol>';
echo "</body></html>";
?>
