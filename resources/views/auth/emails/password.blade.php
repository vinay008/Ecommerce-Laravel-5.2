Click Here to Reset your Password: <br>
<a href="{{ $link = url('/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>