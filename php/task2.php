<html>
<body>
    <form action="task2.php" method="post"> 
        <h1>Sum Calculator </h1>
        <label for="n1">Enter number 1:</label>
        <input type=text id=n1 name=n1><br>
        <label for="n2">Enter number 2:</label>
        <input type=text id=n2 name=n2><br>

        <input type="submit" value="calculate sum">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //retrive form data
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $sum=$n1+$n2;
        echo "The sum of $n1 and $n2 is: $sum";
    }
    ?>
</body>
</html>