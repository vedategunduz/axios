@extends('layouts.app')

@section('content')
    <form action="" id="loginform">
        <input type="email" name="email" id="email" placeholder="Email" value="vgunduz@nku.edu.tr">
        <input type="password" name="password" id="password" placeholder="Password" value="123456emre">
        <button type="submit">Login</button>
    </form>
@endsection

@section('scripts')
    <script>
        document.getElementById('loginform').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);

            const RESPONSE = await ApiService.fetchData('api/test', formData, 'POST');

            if (RESPONSE.success)
                ApiService.alert.success(RESPONSE.message);
            else
                ApiService.alert.error(RESPONSE.message);
        });
    </script>
@endsection
