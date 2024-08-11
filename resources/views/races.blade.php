@extends('base')
@section('content')
    <div class="pl-16">

        <div>
            <div class="text-xl">Généralités sur les races</div>
            <div>De nombreuses races cohabitent au sein de Deifall, même si la popularité de certaines sont en déclin.
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <table class="table-fixed w-3/4">
            <tr>
                <th>Nom</th>
                <th>Durée de vie</th>
                <th>Description générale</th>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Elfe des bois</td>
                <td>1300 ans en moyenne</td>
                <td>Les Elfes des bois vivent en autarcie dans des forêts denses. Ils vivent en communion avec la nature
                    et sont légerement xénophobe, même s’ils leur arrive d’être empathique pour d’autre races dans de
                    rares occasions.
                </td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Elfe des profondeurs</td>
                <td>Inconnue</td>
                <td>Les Elfes des profondeurs vivent en dessous de la croute terrestre, ils ne sortent que rarement à la
                    surface, et s’ils le font c’est souvent sous une autre apparence.
                </td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Elfe d'ivoire</td>
                <td>4000 ans en moyenne</td>
                <td>Les Elfes d’ivoire sont considéré comme des dieux parmis les autres Elfes. Leur esperence de vie
                    peut s’étendre jusqu’à 4000 ans, mais leurs os ainsi que leur capacité magiques étant très prisées,
                    rare sont les êtres qui arrivent à vivre aussi longtemps.
                </td>
            </tr>
            <tr class="text-center hover:bg-neutral-200 cursor-pointer">
                <td>Felidrae</td>
                <td>Inconnue</td>
                <td>Les Felidrae sont des humanoides chats, ils vivent seul et il est très rare d’en apercevoir, malgré leur apparence peu commune.
                </td>
            </tr>
        </table>
    </div>
@stop
