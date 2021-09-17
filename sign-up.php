<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sightseeing/css/style.css">
    <title>会員登録</title>
</head>
<body>
    <div class="singup">
        <form action="sign-in.php" method="post">
            <input type="text" class="register" name="name" placeholder="名前を入力してください" maxlength="50" required>
            <input type="text" class="register" name="nickname" placeholder="ニックネームを入力してください" maxlength="50" required>
            <input type="mail" class="register" name="mail" placeholder="メールアドレスを入力してください" maxlength="228" required>
            <input type="password" class="register" name="password" placeholder="パスワードを入力してください" minlength="4" maxlength="60" required>
            <button type="submit">登録する</button>
        </form>
    </div>
</body>
</html>