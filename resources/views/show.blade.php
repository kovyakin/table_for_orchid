{{--<div class=" mb-4">--}}
{{--    {{$user ?? ''}}--}}
{{--    <div>--}}
{{--        <h1 class="text-2xl">Hello {{$user->name ?? ''}}!</h1>--}}
{{--    </div>--}}

{{--    <hr>--}}
{{--</div>--}}


{{--<form action="/user" method="POST" class="mb-4">--}}
{{--    @csrf--}}
{{--    @method('POST')--}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <h1 class="text-2xl">Hello {{$user->name ?? ''}}!</h1>


{{--    <button id="sendform" class="hidden" type="submit">send</button>--}}

{{--</form>--}}
