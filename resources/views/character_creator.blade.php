@extends('base')
@section('content')
    <div class="pl-16">
        <div>
            <div class="text-2xl">Créateur de personnage</div>
            <form action="/submit_character" method="post">
                <fieldset>
                    <legend>Informations de Base</legend>
                    <label for="name">Nom du personnage:</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="race">Race:</label><br>
                    <select id="race" name="race">
                        @foreach($races as $race)
                            <option value="{{ $race->id }}">{{ $race->name }}</option>
                        @endforeach
                    </select><br><br>

                    <label for="class">Classe:</label><br>
                    <select id="class" name="class">
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endforeach
                    </select><br><br>
                </fieldset>

                <fieldset>
                    <legend>Caractéristiques</legend>
                    <label for="strength">Force:</label><br>
                    <input type="number" id="strength" name="strength" min="1" max="20" value="10"><br><br>

                    <label for="dexterity">Dextérité:</label><br>
                    <input type="number" id="dexterity" name="dexterity" min="1" max="20" value="10"><br><br>

                    <label for="constitution">Constitution:</label><br>
                    <input type="number" id="constitution" name="constitution" min="1" max="20" value="10"><br><br>

                    <label for="intelligence">Intelligence:</label><br>
                    <input type="number" id="intelligence" name="intelligence" min="1" max="20" value="10"><br><br>

                    <label for="wisdom">Sagesse:</label><br>
                    <input type="number" id="wisdom" name="wisdom" min="1" max="20" value="10"><br><br>

                    <label for="charisma">Charisme:</label><br>
                    <input type="number" id="charisma" name="charisma" min="1" max="20" value="10"><br><br>
                </fieldset>

                <fieldset>
                    <legend>Apparence</legend>
                    <label for="age">Âge:</label><br>
                    <input type="number" id="age" name="age" min="1" max="100" value="20"><br><br>

                    <label for="height">Taille (en cm):</label><br>
                    <input type="number" id="height" name="height" min="50" max="250" value="170"><br><br>

                    <label for="weight">Poids (en kg):</label><br>
                    <input type="number" id="weight" name="weight" min="30" max="200" value="70"><br><br>

                    <label for="eye_color">Couleur des yeux:</label><br>
                    <input type="text" id="eye_color" name="eye_color"><br><br>

                    <label for="hair_color">Couleur des cheveux:</label><br>
                    <input type="text" id="hair_color" name="hair_color"><br><br>
                </fieldset>

                <input type="submit" value="Créer le personnage">
            </form>
        </div>
    </div>
@stop
