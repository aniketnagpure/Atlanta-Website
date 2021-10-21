<html>
    <?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $mobile=$_POST['mbno'];
    $occupation=$_POST['occu'];
    $city=$_POST['city'];

echo"$fname","$lname","$mail","$mobile","$occupation","$city","<br>";

    $con=mysqli_connect('localhost','root','','aniket123');
    $query="INSERT INTO `mitahara`(`FNAME`, `LNAME`, `MAIL`, `MOBILE`, `OCCUPATION`, `CITY`) VALUES ('$fname','$lname','$mail','$mobile','$occupation','$city')";
    $run=mysqli_query($con,$query);

    if($run==TRUE)
    echo "Sucessful";
    else
    echo "Unsucessful";
    ?>
</html>