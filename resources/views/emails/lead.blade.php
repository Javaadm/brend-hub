id: {{ $id }}
@if($name)
    <br>
    ФИО: {{ $name }}
@endif
<br>
Телефон: {{ $phone }}
@if($email)
    <br>
    Почта: {{ $email }}
@endif
