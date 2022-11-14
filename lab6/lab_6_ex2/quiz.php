<?php
$right = 0;
$ans1 = "a";
$ans2 = "c";
$ans3 = "b";
$ans4 = "d";
$ans5 = "c";

if($ans1==$q1["value"])
{
$right = .$right+1.;
echo "You answered correctly: a) 1865";
}
else
{
echo "The correct answer was a) 1865";
}

if($ans2==$q2["value"])
{
$right = .$right+1.;
echo "You answered correctly: c) Pepsico";
}
else
{
echo "The correct answer was c) Pepsico";

}

if($ans3==$q3["value"])
{
$right = .$right+1.;
echo "You answered correctly: b) Strawberry" echo "<br>";
}
else
{
echo "The correct answer was b) Strawberry" echo "<br>";
}

if($ans4==$q4["value"])
{
$right = .$right+1.;
echo "You answered correctly: d) Florida" echo "<br>";
}
else
{
echo "The correct answer was d) Florida" echo "<br>";
}

if($ans5==$q5["value"])
{
$right = .$right+1.;
echo "You answered correctly: c) 29%" echo "<br>";
}
else
{
echo "The correct answer was c) 29%" echo "<br>";
}

$percent = .($right/5)*100.;
echo "You got .$percent. percent right." echo "<br>";
?>
