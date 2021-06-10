<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="./public/img/logo-removebg.png" class="logo" alt="Kledingbank Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
