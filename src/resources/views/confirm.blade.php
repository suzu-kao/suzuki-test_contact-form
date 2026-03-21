@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection


@section('content')
<div class="contact-form__container">
    <div class="title">
        <h2>Contact</h2>
    </div>
    <form class="contact-table__form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">{{ $contact['last_name'] }} {{ $contact['first_name'] }}
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">性別</th>
                    <td class="radio-group">
                        {{ ['1' => '男性', '2' => '女性', '3' => 'その他'][$contact['gender']] ?? '' }}
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">メールアドレス</th>
                    <td>{{ $contact['email'] }}
                        <input type="hidden" name="email" value="{{ $contact['email'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">電話番号
                    </th>
                    <td>
                        {{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}
                        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">住所</th>
                    <td>{{ $contact['address'] }}
                        <input type="hidden" name="address" value="{{ $contact['address'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">建物名</th>
                    <td>{{ $contact['building'] }}
                        <input type="hidden" name="building" value="{{ $contact['building'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">お問い合わせの種類</th>
                    <td>@if ($contact['category_id'] == '1')
                        商品のお届けについて
                        @elseif ($contact['category_id'] == '2')
                        商品の交換について
                        @elseif ($contact['category_id'] == '3')
                        商品トラブル
                        @elseif ($contact['category_id'] == '4')
                        ショップへのお問い合わせ
                        @elseif ($contact['category_id'] == '5')
                        その他
                        @endif
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                    </td>
                </tr>

                <tr class="form-item">
                    <th class="column-name">お問い合わせ内容</th>
                    <td name="detail">{{ $contact['detail'] }}
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                    </td>
                </tr>
            </table>

                <div>
                    <button class="" type="submit">送信</button>
                    <button class="toFix" type="button" onclick="history.back()">修正</button>
                </div>
        </div>
    </form>




        @endsection