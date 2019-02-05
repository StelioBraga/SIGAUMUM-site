@extends('layouts.app')
@section('title')
 Siga UMUM
@endsection

@section('body')
	<div>
      <div>
        <h1 class="ui header" style="padding: 70px 70px 10px 70px; text-align: center">SiGA UMUM</h1>
  
        <div class="ui secondary menu centered grid" style="padding-bottom: 20px; text-align: center">
          <a class="item active" href="#">Despesas</a>
          <a class="item" href="gooogle.com">Propinas</a>
          <a class="item" href="#">Declaração</a>
        </div>
  
      </div>
  
      <div class="ui container very padded segment">
        <h2 class="ui header">Despesas</h2>
        <br>
  
        <div>
          <label>CÓDIGO DE ESTUDANTE</label><br><br>
          <form action="" method="">
            {{ csrf_field() }}
            <div class="ui large input focus">
              <label for="valor" class="ui label">$</label>
              <input name="codeestudante" type="text" placeholder="valor" id="valor">
              <div class="ui basic label">.00MT</div>
            </div>
            <div class="field">
              <label>ttt</label>
              <teaxtarea rows="3"></teaxtarea>
            </div>
            <button type="submit" class="ui primary basic button" style="margin-left: 14px">Continuar</button> 
            <div class="ui error message"></div>
           </form>
        </div>
  
        

        </div>
      </div>
    </div>

@endsection
