@component('mail::message')
    <p>Please click on the following button in order to verify as subscriber:</p><br><br>
    <p>
        @component('mail::button', ['url' => $subscriber->verification_link])
            Verify
        @endcomponent
    </p>
    <p>Or you can copy and paste the link below to your browser.</p>
    <a href="{{$subscriber->verification_link}}">{{$subscriber->verification_link}}</a>
    <p>If you received this email by mistake, simply delete it. You will not be subscribed if you do not  click the confirmation link above.</p>
   <br><br>
@endcomponent
