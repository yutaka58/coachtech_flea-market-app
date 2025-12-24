<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtech_flea-market-app</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">

</head>


<body>

    <div class="header">
        <div class="header-content">
            <img src="{{ asset('images/COACHTECHヘッダーロゴ.png') }}" alt="COACHTECHロゴ">
        </div>
    </div>
    
    <div class="login-form">
        <h1 class="login-form__heading">ログイン</h1>
        <div class="login-form__inner">
            <form class="login-form__form" action="/login" method="post">
                @csrf
                <div class="login-form__group">
                    <label class="login-form__label" for="email">メールアドレス</label>
                    <input class="login-form__input" type="mail" name="email" id="email">
                </div>
                <div class="login-form__group">
                    <label class="login-form__label" for="password">パスワード</label>
                    <input class="login-form__input" type="password" name="password" id="password">
                </div>
                <div class="login-form__group">
                    <input class="login-form__btn btn" type="submit" value="ログインする">
                </div>
                <div class="login-form__group login-form__register">
                    <a href="/register">会員登録はこちら</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>