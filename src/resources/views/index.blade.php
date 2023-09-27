<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
         @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="山田　太郎" value="{{ old('name') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

　　　　<div class="form__group">
    　　　<div class="form__group-title">
        　<span class="form__label--item">性別</span>
        　<span class="form__label--required">※必須</span>
　　　　</div>
　　　　<div class="form__group-content">
    　　　<div class="form__input--radio">
    　　　　<input type="radio"name="gender"value="male">男性
    　　　　<input type="radio" name="gender"value="female">女性
    　　　</div>
    　　　<div class="form__error">

    　　　</div>
    　　</div>
    　</div>



        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com"value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

　　　　<div class="form__group">
    　　　<div class="form__group-title">
        　　<span class="form__label--item">郵便番号</span>
        　　<span class="form__label--required">※必須</span>
        　</div>
        　<div class="form__group-content">
        　　<div class="form__input--text">
            　<input type="text" name="postal_code" placeholder="123-4567" value="{{ old('postal_code') }}"/>
　　　　　　　</div>
　　　　　　　<div class="form__error">

　　　　　　　</div>
　　　　　　</div>
　　　　　</div>

　　　　<div class="form__group">
    　　　<div class="form__group-title">
        　　<span class="form__label--item">住所</span>
        　　<span class="form__label--required">※必須</span>
        　</div>
        　<div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">

　　　　　　　</div>
　　　　　　</div>
　　　　　</div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" placeholder="千駄ヶ谷マンション101
              " value="{{ old('building_name') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('name')
              {{ $message }}
              @enderror
              @error('email')
              {{ $message }}
              @enderror
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder=""></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>