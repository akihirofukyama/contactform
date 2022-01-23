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

  hr,
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

  .text-center {
    font-size: 40px;
  }

  .text-center {
    text-align: center !important;
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
    padding: 1rem;
  }

  .row {
    display: flex;
    -ms-flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
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

  .col-sm-4 {
    white-space: nowrap;
    font-size: 20px;
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-right: 45px;
    margin-bottom: 0;
    font-size: inherit;
    font-weight: bold;
    line-height: 1.5;
    width: 200px;
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

  .alert-danger {
    text-align: center;
    color: red;
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
    padding-top: 2%;
  }

  .col-sm-8 label:nth-of-type(2) {
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
    width: 130px;
    height: 40px;
    margin-top: 15px;
    color: white;
    font-size: 20px !important;
    background-color: black;
  }
</style>

<body>
  <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
  <div class="container">
    {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
    @csrf
    <div class="form-group row">
      <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        {{ Form::text('fullname', null, ['class' => 'form-control']) }}
        {{ Form::text('fullname', null, ['class' => 'form-control']) }}
      </div>
    </div>
    @if ($errors->has('fullname'))
    <p class="alert alert-danger">{{ $errors->first('fullname') }}</p>
    @endif

    <div class="form-group row">
      <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        <label>{{ Form::radio('gender','1',true) }}男性</label>
        <label>{{ Form::radio('gender', '2') }}女性</label>
      </div>
    </div>
    @if ($errors->has('gender'))
    <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
    @endif


    <div class="form-group row">
      <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        {{ Form::text('email', null, ['class' => 'form-control']) }}
      </div>
    </div>
    @if ($errors->has('email'))
    <p class="alert alert-danger">{{ $errors->first('email') }}</p>
    @endif

    <div class="form-group row">
      <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        <span class="post-mark">〒</span>{{ Form::text('postcode', null, ['class' => 'form-control'],['id'=>'zipcode']) }}
      </div>
    </div>
    @if ($errors->has('postcode'))
    <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
    @endif

    <div class="form-group row">
      <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        {{ Form::text('address', null, ['class' => 'form-control']) }}
      </div>
    </div>
    @if ($errors->has('address'))
    <p class="alert alert-danger">{{ $errors->first('address') }}</p>
    @endif

    <div class="form-group row">
      <p class="col-sm-4 col-form-label">建物名</p>
      <div class="col-sm-8">
        {{ Form::text('building_name', null, ['class' => 'form-control']) }}
      </div>
    </div>

    <div class="form-group row">
      <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">※</span></p>
      <div class="col-sm-8">
        {{ Form::textarea('opinion', null, ['class' => 'form-control'],['class'=>'af_pref af_city']) }}
      </div>
    </div>
    @if ($errors->has('opinion'))
    <p class="alert alert-danger">{{ $errors->first('opinion') }}</p>
    @endif

    <div class="text-center">
      {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
  </div>
</body>

</html>