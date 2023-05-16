
<!-- Задачи на формы в PHP -->

<style>
    div{
        display: flex;
        flex-direction: column;
        border: 1px solid black;
        margin-bottom: 15px;
        padding: 20px;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 500px;
        padding: 20px;
    }

</style>
<!-- 1 -->

<div>
    <form action="" method="get">
        <input type="text" name="name">
        <button type="submit">submit</button>
    </form>
</div>

<?php 
    echo $_GET['name'];
?>

<!-- 2 -->
<div>
    <form action="" method="post">
        <input type="text" name="name2">
        <input type="text" name="age">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">submit</button>
    </form>
</div>
<?php 
    if (isset($_POST['submit'])){
        $request = array_map('strip_tags', $_POST);
        echo 'Привет, ' . $_GET['name2'] . ', ' . $_GET['age'] . ' лет.';
        echo 'Your massage: ' . $_GET['text'];
    }   
?>
<!-- 3 -->

<div>
    <?php if (!isset($_POST['submit'])): ?>
        <form action="" method="post">
            <input type="text" name="age">
            <button type="submit" name="submit">submit</button>
        </form>
    <?php  ?>

    <?php 
        else:
            $age = strip_tags($_POST['age']);
            echo "Your massage: $age ";
        endif;   
?>

</div>

<!-- 4 -->

<div>
    <?php                 
        $good_login = 'user';
        $good_password = '123456';
    ?>
    <form action="" method="post">
        <input type="text" name="age">
        <input type="password" name="pass">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $login = trim(strip_tags($_POST['login']));
            $password = trim(strip_tags($_POST['password']));
            echo 'Доступ разрешен!';
            if ($login == $good_login and $pass == $good_password) {
                echo 'Доступ разрешен!';
            } else {
                echo 'Доступ запрещен!';
            }


        }
    ?>
</div>

<!-- 5 -->

<div>
    <?php 
        if(isset($_POST['submit'])){
            $placeholder = $_POST['name'];
        }
    ?>    
    <form action="" method="post">
        <input value="<?php echo $placeholder ?>" type="text" name="name">
        <button type="submit" name="submit">submit</button>
    </form>

</div>

<!-- 6 -->

<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
</form>