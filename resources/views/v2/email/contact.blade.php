@component('mail::message')
    {{ $contact->subject }}
    <p>Phone :{{ $contact->phone }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>{{ $contact->message }}</p>
   @if (!empty($setting->website_name))
   <h3>
        {{$setting->website_name}}
    </h3>
    <a href="{{env('APP_URL')}}" target="_blank">{{$setting->website_name}}</a>

   @endif
@endcomponent
