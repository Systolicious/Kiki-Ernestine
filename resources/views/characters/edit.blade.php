@extends('layout.general')

@section('content')
    <!-- FORM Edit CHARACTER -->
    <div class="registerForm">
        <form action="">
            {{-- <form action="{{ route('rpg.store') }}" method="POST"> --}}
            @csrf
            <label for="name">Nom du personnage</label>
            <input type="text" name="name" id="name">
            <label for="description">Votre pseudo</label>
            <select name="description" id="description">
                <option value="">--Choississez votre artiste--</option>
                <option value="Andre Breton">André Breton - poète surrealiste par excellence</option>
                <option value="Paul Eluard">Paul Eluard - amoureux des mots et des femmes</option>
                <option value="Louis Aragon">Louis Aragon - génie de l'éloquence</option>
                <option value="Amadeo Modigliani">Amadeo Modigliani - l'artiste au trait de pinceau assassin</option>
                <option value="Max Ernst">Max Ernst - l'homme au regard multidimensionnel</option>
                <option value="Vaslav Nijinski">Vaslav Nijinski - le russe qui file à l'anglaise</option>
            </select>


            <select name="specialite" id="specialite">
                <option value="">--Choississez votre spécialité--</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berserker">Berserker</option>
                <option value="Archer">Archer</option>
            </select>


            <ol>
                <li>Magie :
                    <!--- pull info from db---->
                </li>
                <li>Force :
                    <!--- pull info from db---->
                </li>
                <li>Agilité :
                    <!--- pull info from db---->
                </li>
                <li>Intelligence :
                    <!--- pull info from db---->
                </li>
                <li>Points de Vie :
                    <!--- pull info from db---->
                </li>
            </ol>

            <input type="submit" class="submit" value="Valider" />
        </form>
    </div>
@endsection
