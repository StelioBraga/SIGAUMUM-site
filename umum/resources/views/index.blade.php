@extends('layouts.app')
@section('title')
 Siga UMUM
@endsection

@section('body')

      <div>
        <h1 class="ui header" style="padding: 70px 70px 10px 70px; text-align: center">SiGA UMUM</h1>
  
        <div class="ui secondary menu centered grid" style="padding-bottom: 20px; text-align: center">
          <a class="item active"  href="#">Despesas</a>
          <a class="item" data-tab="first" href="#">Propinas</a>
          <a class="item" href="#">Declaração</a>
        </div>
        </div>
  
           <!--    Contexto de Propinas -->
        <div class="ui container very padded segment">
        <h2 class="ui header">Propinas</h2>
        <br>
  
        <div>
          <label>CÓDIGO DE ESTUDANTE</label><br><br>
          <form action="/search" method="get">
            {{ csrf_field() }}
            <div class="ui large input focus">
              <input name="codeestudante" type="text" placeholder="Procurar...">
            </div>
            <button type="submit" class="ui primary basic button" style="margin-left: 14px">Continuar</button> 
            <div class="ui error message"></div>
          </form>
        </div>
  
        <br><div class="ui divider"> </div><br>
  
        <div>
          <label>DADOS DO ESTUDANTE</label>
          <table class="ui celled table">
            <tbody>
            @foreach($estudantes as $estudante)
              <tr>
                <td data-label="Name">Nome</td>
                <td data-label="nome">{{ $estudante['primeiro_nome'] }}</td>
              </tr>
              <tr>
                <td data-label="curso">Curso</td>
                <td data-label="curo">{{ $estudante['ultimo_nome'] }}</td>
              </tr>
              <tr>
                <td data-label="ano">Ano</td>
                <td data-label="Ano">{{ $estudante['curo']}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
  
          <div class="ui divider"></div>
          <form action="" method="">
          {{ csrf_field() }}
          
            <div class="ui segment red-border-s">
              <label>CONFIRMAR O PAGAMENTO PARA O ESTUDANTE</label><br><br>
              <div class="ui form">
                <div class="fields">
                  <div class="field">
                    <label>Tipo de Pagamento</label>
                    <select class="ui dropdown">
                      <option value="">Escolha a Opção de Pagamento</option>
                      <option value="">Transferencia</option>
                      <option value="">Deposito </option>
                      <option value="">POS</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Mês do Pagamento</label>
                    <select class="ui dropdown" name="mesapagra">
                      <option value="">Escolha o Mês a Pagar</option>
                      <option value="">Janeiro</option>
                      <option value="">Fevereiro </option>
                      <option value="">Março</option>
                    </select>
                  </div>
                  <div class="nine wide field">
                    <label>Referência do Pagamento</label>
                    <input name="s" type="text" placeholder="Digite a Referência ">
                  </div>  

                </div>
                <div style="text-align:right" >
                <button class="ui primary basic button " type="submit" id="pay">Continuar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>


          <!--    Contexto de Despesas -->
      <div class="ui container very padded segment">
        <h2 class="ui header">Despesas</h2>
        <br>
  
        <div>
          <label>CUSTOS DA DESPESAS</label><br>
          <form action="" method="">
            {{ csrf_field() }}
            <div class="ui form">

            <div class="field">
              <textarea rows="2"></textarea>
            </div>
            <label>DESCRIÇÃO DA DESPESAS</label><br>
            <div class="ui large input focus">
            <input name="codeestudante" type="text" placeholder="valor" id="valor">
            <div class="ui basic label">.00MT</div>
            
            <div style="text-align:right" >
            <button class="ui primary basic button "  id="REGISTRE">REGISTRAR</button>
            </div>
            <div class="ui error message"></div>
            </div>
          </form>
          </div>
      </div>
  
        <br><div class="ui divider"> </div><br>
      </div>


        <!--    Contexto de Declaracao -->
        <div class="ui container very padded segment">
        <h2 class="ui header">Propinas</h2>
        <br>
  
        <div>
          <label>CÓDIGO DE ESTUDANTE</label><br><br>
          <form action="/search" method="get">
            {{ csrf_field() }}
            <div class="ui large input focus">
              <input name="codeestudante" type="text" placeholder="Procurar...">
            </div>
            <button type="submit" class="ui primary basic button" style="margin-left: 14px">Continuar</button> 
            <div class="ui error message"></div>
          </form>
        </div>
  
        <br><div class="ui divider"> </div><br>
      </div>
  
        
        
    
    



@endsection
