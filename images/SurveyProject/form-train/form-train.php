<html>
    <body>
        <form action="" method="post">
            <input name="fullname" placeholder="Fullname"/>
            <input name="age" placeholder="Age" type="number"/>
            <input name="email" placeholder="Email" type="email"/>
            <button type="submit">
                Submit
            </button>
        </form>
    </body>
</html>
<?php
    if(!empty($_POST)){
        print_r($_POST['fullname']);
    }
?>