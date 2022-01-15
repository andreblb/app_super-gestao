<h3>Fornecedores</h3>




@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Temos alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Temos varios fornecedores cadastrados</h3>
@else
    <h3>Não temos fornecedores cadastrados</h3>
@endif
