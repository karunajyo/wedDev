<! doctype html>
<head>
<title>WELCOME</title>
<head>
<body>
<?php 
$name = "evry one this is the form";
echo "hello <br>"; 
echo $name;
?>
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
    Name:<input type = "name" class = "name">
    <br><br>
    Email:<input type = "email" class = "email">
    <br><br>
    Website:<input type = "website" class = "website">
    <br><br>
    Gender:
    <input type = "radio" class = "female">Female
    <input type = "radio" class = "Male" >Male
    <input type = "radio" class = "Others">Others
    <br><br>
    Comment: <textarea col = "5" row = "4"></textarea>
    <br><br>
    <input type = "button" value = "submit" class = "Sumit">
</form>
</body>
</html>