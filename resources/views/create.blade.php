
<form action="/user" method="POST">
    @csrf
    @method('POST')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label> Name </label>
    <input type="text" value="" name = "name" id="name" class="rounded bg-amber-50 mb-4">
    <label> Email </label>
    <input type="text" value="" name = "email" id="email" class="rounded bg-amber-50 mb-4">
    <label> Password </label>
    <input type="text" value="" name = "password" id="password" class="rounded bg-amber-50 mb-4">
    <button id="sendform" class="hidden" type="submit">send</button>
</form>
