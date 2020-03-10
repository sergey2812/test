<div id="example">
	<p>Пример ИНН:</p>
	<p>- с ограничением 784100362403, 332501373163,</p>
	<p>- без ограничения - 253402065152 или 772739580300</p>
</div>

<form class="card">
    <input type="hidden" id="mode" name="fake" value="">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Введите ИНН из 12 цифр (скопируйте из примера)" name="inn">
      <div class="input-group-append">
        <input type="button" class="btn btn-secondary" id="search" value="Найти">
      </div>
    </div>
</form>

<div class="container">
	<textarea name="inn_result" readonly="true" id="inn_result"></textarea>
</div> 