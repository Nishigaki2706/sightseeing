<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sightseeing/css/style.css">
    <title>会員登録</title>
</head>
<body>
    <div class="sign-up">
        <h1>会員登録する</h1>
        <form action="sign-in.php" method="post">
            <input type="text" class="register" name="name" placeholder="名前を入力してください" maxlength="50" required autofocus>
            <input type="text" class="register" name="nickname" placeholder="ニックネームを入力してください" maxlength="50" required>
            <input type="mail" class="register" name="mail" placeholder="メールアドレスを入力してください" maxlength="228" required>
            <input type="password" class="register" name="password" placeholder="パスワードを入力してください" minlength="4" maxlength="60" required>
            <button type="submit"><a href="sign-in.php">登録する</a></button>
        </form>
    </div>
</body>
</html>