<form role="form">
    <div class="form-group">
        <label for="sel1">Seleccione un banco:</label>
        <select class="form-control" id="bank" name="bank">
            @foreach ($banks as $bank)
                <option value="{{$bank->getCode()}}">{{$bank->getName()}}</option>
            @endforeach

        </select>
    </div>
</form>