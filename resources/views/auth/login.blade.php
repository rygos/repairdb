@extends('layouts.app')

@section('content')
    <br><br>
    <div id="prodpagecontainer">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <table id="pouetbox_prodmain">
            <tbody>
                <tr id="prodheader">
                    <th colspan="2">
                        <span id='title'>{{ __('Login') }}</span>
                    </th>
                </tr>
                    <tr>
                        <td>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                        </td>
                        <td>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <input style="width: 25em;" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">{{ __('Password') }}</label>
                        </td>
                        <td>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <input id="password" type="password" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </td>
                        <td>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </td>
                        <td>
                            <button type="submit">
                                {{ __('Login') }}
                            </button>
                        </td>
                    </tr>
            </tbody>
        </table>
        </form>
    </div>
@endsection
