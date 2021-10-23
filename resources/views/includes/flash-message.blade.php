@if (session('status'))
<p
    style="color: #fff; width:100%;font-size:18px;font-weight:600;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
    {{ session('status') }}</p>
@endif