<h1>Покупки</h1>
<div>
    <form action="{{ route('purchs.show') }}" method="POST">
        @csrf
        <label>Название</label><br>
        <input type="text" id="name" name="name"><br>
        <label>Количество<label><br>
        <input type="number" id="cost" name="cost"><br>
<button type="success">Отправить</button>     
</form>
</div>
<h2>Сделанное или нет</h2>
<ul>
@foreach($purchs as $purch)
<li>
<p>{{ $purch->name }}</p>
<p>{{ $purch->cost }}</p>
<p>{{ $purch->created_at }}</p>
@if( $purch->status == false)
<form action="{{ route('purchs.change'), $purch->id}}" method="POST">
<p>требуется</p>
<button type="success">Закончить</button>
</form>
@else
<p>завершено</p>
@endif
</li>
@endforeach
</ul>
{{ $purchs->links() }}