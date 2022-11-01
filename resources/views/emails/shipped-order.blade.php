@component('mail::message')
    Your order was shipped  wait for a phone call to receive it.
    @component('mail::button',['url' => 'https://www.google.com'])
        more details
    @endcomponent

    Thanks
    Laravel Team
@endcomponent
