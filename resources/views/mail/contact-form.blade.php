@component('mail::message')
<h1>Nova mensagem do formulário de contato</h1>
<p>Nome: {{ $name }}</p>
<p>Email: {{ $email }}</p>
@if ($phone)
<p>Telefone: {{ $phone }}</p>
@endif
@if ($identification)
<p>Documento: {{ $identification }}</p>
@endif
<p>Mensagem: {{ $message }}</p>
@endcomponent
