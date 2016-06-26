<form role="form" id="form-pedido">
    <div class="form-horizontal">
      <div class="row">
          <div class="col-lg-12">
              <div class="form-group">
                  <label class="col-sm-3 control-label">Cliente</label>
                  <div class="col-sm-9 controls">
                      <div class="row">
                          <div class="col-xs-12">
                            <select  id="cliente" class="form-control selectBoot" data-live-search="true" required>
                              @foreach($clientes as $cliente)
                                  <option value="{{ $cliente->id }}">{{ $cliente->apellido }} {{ $cliente->nombre }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="divSena" class="form-group hide animated pulse">
                  <label class="col-sm-3 control-label">Seña</label>
                  <div class="col-sm-9 controls">
                      <div class="row">
                          <div class="col-xs-12">
                              <div class="input-icon right">
                                  <i class="fa fa-usd"></i>
                                  <input class="form-control" type="number" step="any" id="sena" data-parsley-type="number"  min="0" max="1000000" placeholder="campo requerido" required/>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
<input class="hide" id="botonMandar" type="submit" value="Submit">
</form>
<button id="botonModalidad" class="btn btn-primary btn-block"> Pagar la totalidad</button>
