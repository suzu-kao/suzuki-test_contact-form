@extends('layouts.authapp')


@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('header')
@if(Auth::check())
<form action="/logout" method="post">
    @csrf
    <button type="submit" class="logout">Logout</button>
</form>
@endif
@endsection

@section('content')
<h1 class="page-title">Admin</h1>
<div class="contains">
    <form action="/admin/search" method="get">
        @csrf
        
    </form>

    
    <div class="contacts-table">
        <div class="above-table">
            <form action="/admin/csv-download" method="get">
                @csrf
                <button type="submit" class="export">エクスポート</button>
            </form>
            <div class="pagination">
                {{$contacts->appends(request()->query())->links()}}
            </div>
        </div>
        <table class="contacts-database" cellspacing="0">
            <tr>
                <th class="column-name">お名前</th>
                <th class="column-name">性別</th>
                <th class="column-name">メールアドレス</th>
                <th class="column-name">お問い合わせの種類</th>
                <th class="column-name"></th>
                <th class="column-name"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td class="name_get{{$contact['id']}} name_get">{{$contact['last_name']}}{{$contact['first_name']}}</td>
                <td class="gender_get{{$contact['id']}} gender_get">{{$contact['gender']}}</td>
                <td class="email_get{{$contact['id']}} email_get">{{$contact['email']}}</td>
                <td class="category_get{{$contact['id']}} category_get">{{$contact->category->getCategory()}}</td>
                <td class="created_get{{$contact['id']}} created_get"><input type="hidden" value="{{$contact['created_at']}}"></td>
                <td class="detail_get">
                    <div class="detail-view" id="{{$contact['id']}}">
                        詳細
                    </div>
                </td>
                <div class="hidden-column">
                    <p class="tel_get{{$contact['id']}}">{{$contact['tel']}}</p>
                    <p class="address_get{{$contact['id']}}">{{$contact['address']}}</p>
                    <p class="building_get{{$contact['id']}}">{{$contact['building']}}</p>
                    <p class="detail_get{{$contact['id']}}">{{$contact['detail']}}</p>
                </div>
            </tr>
            @endforeach
        </table>
        <!-- 以下モーダル -->
        <div class="modal">
            <div class="close-button">
                ×
            </div>
            <table class="modal-table">
                <tr>
                    <th class="modal-title">お名前</th>
                    <td class="full-name-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">性別</th>
                    <td class="gender-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">メールアドレス</th>
                    <td class="email-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">電話番号</th>
                    <td class="tel-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">住所</th>
                    <td class="address-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">建物名</th>
                    <td class="building-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title">お問い合わせの種類</th>
                    <td class="category-modal modal-cell"></td>
                </tr>
                <tr>
                    <th class="modal-title detail-title">お問い合わせ内容</th>
                    <td class="detail-modal modal-cell"><textarea class="detail-text-modal"></textarea></td>
                </tr>
            </table>
            <div class="delete">
                <form action="/admin/delete" method="post">
                    @csrf
                    <input name="id" type="hidden" value="" class="delete-id">
                    <button class="delete-button" type="submit">削除</button>
                </form>
            </div>
        </div>
        <div class="reset">
            <a href="/admin" class="reset-link">リセット</a>
        </div>
    </div>
</div>
@endsection