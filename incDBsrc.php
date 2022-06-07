<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab_3</title>
</head>
<body >
    <b>Введите группу</b> 
    <form action = 'index1.php' method = "get">
            <input type = 'text' name = "grClSch" id = "grClSch" 
            oninput="localStorage.setItem('grClSch', grClSch.value)">
            <input type = 'submit' value = "Get">
    </form>

    <script>
        const grClSch = document.getElementById("grClSch");
        grClSch.value = localStorage.getItem('grClSch');
    </script>


    <b>Введите преподавателя   и   дисциплину</b> 
    <form action = 'index2.php' method = "get">
        <input type = 'text' name = "teachClSch" id = "teachClSch" oninput="localStorage.setItem('teachClSch', teachClSch.value)"><!--value = "Yankovskiy O.A." -->
        <input type = 'text' name = "disciple" id = "disciple" oninput="localStorage.setItem('disciple', disciple.value)"> <!-- value = "Creation of Images and Sound"> -->
        <input type = 'submit' value = "Get">
    </form>
    <script>
        const teachClSch = document.getElementById("teachClSch");
        teachClSch.value = localStorage.getItem('teachClSch');

        const disciple = document.getElementById("disciple");
        disciple.value = localStorage.getItem('disciple');
    </script>


    <b>Введите аудиторию</b> 
    <form action = 'index3.php' method = "get">
        <input type = 'text' name = "audClSch" id = "audClSch" oninput="localStorage.setItem('audClSch', audClSch.value)">
        <input type = 'submit' value = "Get">
    </form>
    <script>
        const audClSch = document.getElementById("audClSch");
        audClSch.value = localStorage.getItem('audClSch');
    </script>



</body>
</html>