<form role="form">
    <div class="form-group">
        <label for="bankCode">Seleccione un banco:</label>
        <select class="form-control" id="bankCode" name="bankCode">
            @foreach ($banks as $bank)
                <option value="{{$bank->getCode()}}">{{$bank->getName()}}</option>
            @endforeach
        </select>
        <label for="bankInterface">Seleccione un banco:</label>
        <select class="form-control" id="bankInterface" name="bankInterface">
            <option value="0">Personas</option>
            <option value="1">Empresas</option>
        </select>
        <label for="totalAmount">Valor a pagar</label>
        <input type="text" value="0" name="totalAmount" id="totalAmount">
        <label for="devolutionBase">Valor a pagar</label>
        <input type="text" value="0" name="totalAmount" id="totalAmount">
        <label for="totalAmount">Valor a pagar</label>
        <input type="text" value="0" name="totalAmount" id="totalAmount">
        <label for="totalAmount">Valor a pagar</label>
        <input type="text" value="0" name="totalAmount" id="totalAmount">
        <input type="hidden" name="returnURL" id="returnURL" value="{{url('/')}}">
        <input type="hidden" name="reference" id="reference" value="{{rand(10,10000)}}">
        <input type="hidden" name="description" id="description" value="Pago PlaceToPay">
        <input type="hidden" name="language" id="language" value="es">
        <input type="hidden" name="currency" id="currency" value="COP">
        <input type="hidden" name="currency" id="currency" value="COP">
        <input type="hidden" name="currency" id="currency" value="COP">
        <input type="hidden" name="currency" id="currency" value="COP">
    </div>
</form>