<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ</title>
</head>

<style>
  /*リセットcss↓*/
  html {
    overflow-y: scroll;
  }

  body,
  div,
  dl,
  dt,
  dd,
  ul,
  ol,
  li,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  pre,
  form,
  fieldset,
  input,
  textarea,
  p,
  blockquote,
  th,
  td {
    margin: 0;
    padding: 0;
  }

  address,
  caption,
  cite,
  code,
  dfn,
  em,
  strong,
  th,
  var {
    font-style: normal;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }

  caption,
  th {
    text-align: left;
  }

  q:before,
  q:after {
    content: '';
  }

  object,
  embed {
    vertical-align: top;
  }

  legend {
    display: none;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: 100%;
  }

  img,
  abbr,
  acronym,
  fieldset {
    border: 0;
  }

  li {
    list-style-type: none;
  }

  sup {
    vertical-align: super;
    font-size: 0.5em;
  }

  img {
    vertical-align: top;
  }

  i {
    font-style: normal;
  }

  /* style.css */

  .management {
    margin-top: 5%;
  }

  .row {
    display: flex;
    -ms-flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }

  .text-center {
    font-size: 40px;
  }

  .text-center {
    text-align: center !important;
  }

  .search {
    border: 1px solid black;
    padding: 15px;
  }

  .container {
    display: flex;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 15px;
  }

  form {
    margin: 0 auto;
  }

  .form-group {
    width: 90%;
    margin: 0 auto;
    margin-bottom: 1rem;
  }


  input {
    overflow: visible;
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  input:nth-of-type(1) {
    padding-right: 2%;
    overflow: visible;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;

  }

  .col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
  }

  .col-sm-4-1 {
    white-space: nowrap;
    font-size: 20px;
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    font-weight: bold;
    line-height: 1.5;
    width: 49px;
  }

  .col-sm-4 {
    white-space: nowrap;
    font-size: 20px;
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-right: 75px;
    margin-bottom: 0;
    font-size: inherit;
    font-weight: bold;
    line-height: 1.5;
    width: 49px;
  }

  .ml-1,
  .mx-1 {
    margin-left: 0.25rem !important;
  }

  .badge-danger {
    color: #fff;
    background-color: #dc3545;
  }

  .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
  }

  .ml-1,
  .mx-1 {
    margin-left: 0.25rem !important;
  }

  .mx-3 {
    padding-top: 1.4%;
  }

  .badge-danger {
    color: red;
    background-color: white;
    font-size: 20px;
  }

  .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
  }

  .post-mark {
    font-size: 30px;
    vertical-align: middle;
  }


  .col-sm-8 {
    position: relative;
    width: 436px;
    padding-right: 35px;
    padding-left: 15px;
    display: flex;
  }

  .col-sm-8 label {
    padding-top: 3%;
  }

  .col-sm-8 label:not(first-child) {
    margin-left: 15px;
  }

  .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
  }

  .btn {
    width: 150px;
    height: 30px;
    margin-top: 15px;
    color: white;
    background-color: black;
  }

  .list {
    padding-bottom: 4px;
  }

  .tr-first {
    border-bottom: solid 1px black;

  }

  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 35px !important;
  }

  th {
    padding-left: 45px;
    padding-bottom: 10px;
    border-bottom: 1px solid black;
  }

  td {
    padding-left: 45px;
  }

  .d-flex a {
    display: block;
    padding-top: 2%;
    color: black;
  }

  .justify-content-center {
    text-align: center;
  }

  .button-delete {
    color: white;
    background-color: black;
  }

  .paginate {
    display: flex;
    font-size: 18px;
  }

  span {
    display: none;
  }

  .paginationWrap {
    display: flex;
    justify-content: right;
    margin-top: 38px;
    margin-bottom: 40px;
  }

  .paginationWrap ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
  }

  .paginationWrap ul.pagination li {
    display: inline;
    margin-right: 4px;
  }

  .paginationWrap ul.pagination li a {
    color: #2f3859;
    padding: 8px 14px;
    text-decoration: none;
  }

  .paginationWrap ul.pagination li a.active {
    background-color: white;
    color: black;
    border-radius: 40px;
    width: 38px;
    height: 38px;
  }

  .paginationWrap ul.pagination li a:hover:not(.active) {
    background-color: #e1e7f0;
    border-radius: 40px;
  }
</style>

<body>
  <h1 class="text-center">管理システム</h1>
  <div class="management">
    <div class="search">
      {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
      @csrf
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前</p>
        <div class="col-sm-8">
          {{ Form::text('fullname',null , ['class' => 'form-control']) }}
        </div>

        <p class="col-sm-4-1 col-form-label">性別</p>
        <div class="col-sm-8">
          <label>{{ Form::radio('gender', ) }}すべて</label>
          <label>{{ Form::radio('gender', '1',true) }}男性</label>
          <label>{{ Form::radio('gender', '2') }}女性</label>
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">登録日</p>
        <div class="col-sm-8">
          {{ Form::date('from', null,['type' => 'date'], ['class' => 'form-control']) }}
          <span class="mx-3 text-grey">~</span>
          {{ Form::date('until', null,['type' => 'date'], ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス</p>
        <div class="col-sm-8">
          {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <button class="btn btn-info my-2" type="submit">検索</button>
        <a href="{{ route('management') }}" class="text-white">リセット</a>
      </div>


      {!! Form::close() !!}

    </div>
    {{ $contacts->links('pagination::default') }}



    <div class="list">
      <table>
        <tr>
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
          <td>{{$contact->id}}</td>
          <td>{{$contact->fullname}}</td>
          <td>{{$contact->gender}}</td>
          <td>{{$contact->opinion}}</td>
          <td>
            <form action=" {{ route('delete', $contact->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="button-delete">削除</button>
          </td>
          @endforeach
        </tr>
      </table>
    </div>
  </div>
</body>

</html>