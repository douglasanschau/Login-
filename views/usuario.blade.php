@auth 

<h4>Lista de Categorias</h4>
    <ul>
        <li>Alimentos</li>
        <li>Eletrônicos</li>
        <li>Imóveis</li>
        <li>Informática</li>
        <li>Perfumaria</li>
    </ul>
<hr>

<h4>Você está logado! </h4>
       <p> {{Auth::user()->name}} </p>
       <p> {{Auth::user()->email}} </p>
       <p> {{Auth::user()->id}} </p>


@endauth

@guest  
   <h4>Você não está logado!</h4>  
@endguest
