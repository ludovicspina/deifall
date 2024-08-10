@extends('base')
@section('content')

    <div class="pl-16">

        <div>
            <div class="text-xl">Généralités sur les divinités</div>
            <ul>
                <li>- Il existe différentes divinités sous lesquelles notre âme à prêté serment</li>
                <li>- Chaque divinité possède son opposé</li>
                <li>- Chaque divinité défini les règles des pouvoirs qui son donnés aux êtres qui leur ont prêté
                    serment
                </li>
                <li>- Les divinités influent sur la <a class="text-blue-700 underline" href="{{route('magic')}}">magie</a> des individus</li>
            </ul>
        </div>
    </div>
    <div class="flex justify-center">
        <table class="table-fixed w-1/2">
            <tr>
                <th>Nom</th>
                <th>Précepte principal</th>
                <th>Précepte secondaire</th>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Déesse Ora</td>
                <td>Honneteté</td>
                <td>Altruisme</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Dieu Aro</td>
                <td>Mensonge</td>
                <td>Egoîsme</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Dieu Ergoth</td>
                <td>Construction</td>
                <td>Combustion</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Déesse Orgath</td>
                <td>Destruction</td>
                <td>Orage</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Dieu Asmil</td>
                <td>Charisme</td>
                <td>Brutalité</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Déesse Imsal</td>
                <td>Beauté</td>
                <td>Finesse</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Déesse Valengir</td>
                <td>Protection</td>
                <td>Force</td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Dieu Galenvar</td>
                <td>Souffrance</td>
                <td>Alchimie</td>
            </tr>
        </table>
    </div>
@stop
