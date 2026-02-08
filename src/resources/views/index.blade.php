@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--name">
          <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" />
          <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}" />
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <label class="form__radio">
            <input type="radio" name="gender" value="male" checked/>
            <span>男性</span>
          </label>
          <label class="form__radio">
            <input type="radio" name="gender" value="female" />
            <span>女性</span>
          </label>
          <label class="form__radio">
            <input type="radio" name="gender" value="other" />
            <span>その他</span>
          </label>
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス ※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号 ※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--tel">
          <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}" />
          <span class="form__tel-hyphen">-</span>
          <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}" />
          <span class="form__tel-hyphen">-</span>
          <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}" />
        </div>
        <div class="form__error">
          @error('tel_1')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所 ※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類 ※</span>
      </div>
      <div class="form__group-content">
        <div class="form__select">
          <select name="category">
            <option value="" selected disabled>選択してください</option>
            <option value="service">サービスについて</option>
            <option value="price">料金について</option>
            <option value="other">その他</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容 ※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection
