@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection


@section('content')
<div class="contact-form__container">
    <div class="title">
        <h2>Contact</h2>
    </div>
    <form class="contact-table__form" action="/confirm" method="post">
        @csrf
        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">お名前
                    <span class="form-label__required">※</span>
                </label>
                <input type="text" name="last_name" placeholder="例）山田" value="{{ old('last_name') }}">
                <input type=" text" name="first_name" placeholder="例）太郎" value="{{ old('first_name')}}">
            </div>
            <div class="name--error_container">
                <div class="error-message">
                    @error('last_name')
                    {{$message}}
                    @enderror
                </div>
                <div class="error-message">
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">性別
                    <span class="form-label__required">※</span>
                </label>
                <div class="radio-group">
                    <div class="radio--item">
                        <input type="radio" id="male" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>
                        <label for="male">男性</label>
                    </div>
                    <div class="radio--item">
                        <input type="radio" id="female" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                        <label for="female">女性</label>
                    </div>
                    <div class="radio--item">
                        <input type="radio" id="other" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
                        <label for="other">その他</label>
                    </div>
                </div>
            </div>
            <div class="error-message">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">メールアドレス
                    <span class="form-label__required">※</span>
                </label>
                <input type="text" placeholder="例）jack@yahoo.me.jp" name="email" value="{{ old('email')}}">
            </div>
            <div class="error-message">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">電話番号
                    <span class="form-label__required">※</span>
                </label>
                <div class="tel-group">
                    <input type="text" name="tel1" placeholder="000" value="{{ old('tel1')}}">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel2" placeholder="000" value="{{ old('tel2')}}">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel3" placeholder="000" value="{{ old('tel3')}}">
                </div>
            </div>
            <div class="error-message">
                @error('tel')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">住所
                    <span class="form-label__required">※</span>
                </label>
                <input type="text" placeholder="例）東京都渋谷区千駄ヶ谷1-2-3" name="address" value="{{ old('address')}}">
                <div class="error-message">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">建物名</label>
                <input type="text" placeholder="例）千駄ヶ谷マンション101" name="building" value="{{ old('building')}}">
            </div>
            <div class="error-message">
                @error('building')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">お問い合わせの種類
                    <span class="form-label__required">※</span>
                </label>
                <select name="category_id" id="category_id">
                    <option value="category_id" selected>選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->content }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="error-message">
            @error('category_id')
            {{$message}}
            @enderror
        </div>


        <div class="form-item__container">
            <div class="form-item">
                <label class="column-name">お問い合わせ内容
                    <span class="form-label__required">※</span>
                </label>
                <textarea name="detail" id="detail" placeholder="お問い合わせ内容をご記入ください">{{ old('detail') }}</textarea>
            </div>
            <div class="error-message">
                @error('detail')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="" type="submit">確認画面</button>
        </div>
    </form>
</div>




@endsection