@extends('visits.layout')

@section('content')
    <div class="card" style="max-width:360px;margin:80px auto">
        <h1>Журнал заходов</h1>
        <form method="post" action="{{ route('visits.login') }}">
            @csrf
            <p><input type="password" name="password" placeholder="Пароль" autofocus required></p>
            @error('password')<p style="color:var(--bad)">{{ $message }}</p>@enderror
            <button type="submit">Войти</button>
        </form>
    </div>
@endsection
