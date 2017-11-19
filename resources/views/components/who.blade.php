@if (Auth::guard('web')->check())
    <p class="text-success">
        You are Logged In as <strong>USER</strong>
    </p>
@else
    <P class="text-danger">
        You are Logged Out as a <strong>USER</strong>
    </P>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">
        You are Logged In as <strong>ADMIN</strong>
    </p>
@else
    <P class="text-danger">
        You are Logged Out as a <strong>ADMIN</strong>
    </P>
@endif