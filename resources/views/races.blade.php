@extends('base')
@section('content')
    <div class="pl-4">

        <div>
            <div class="text-xl">Généralités sur les races</div>
            <div>De nombreuses races cohabitent au sein de Deifall, même si la popularité de certaines sont en déclin.
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-3 mx-4 gap-2">
        <div class="flex flex-col border border-black">
            <div>Elfe des bois</div>
            <div>1300 ans</div>
            <div>Les Elfes des bois vivent en autarcie dans des forêts denses. Ils vivent en communion avec la nature
                et sont légerement xénophobe, même s’ils leur arrive d’être empathique pour d’autre races dans de
                rares occasions.
            </div>
        </div>
        <div class="flex flex-col border border-black">
            <div>Elfe des profondeurs</div>
            <div>Inconnue</div>
            <div>Les Elfes des profondeurs vivent en dessous de la croute terrestre, ils ne sortent que rarement à la
                surface, et s’ils le font c’est souvent sous une autre apparence.
            </div>
        </div>
        <div class="flex flex-col border border-black">
            <div>Elfe d'ivoire</div>
            <div>4000 ans en moyenne</div>
            <div>Les Elfes d’ivoire sont considéré comme des dieux parmis les autres Elfes. Leur esperence de vie
                peut s’étendre jusqu’à 4000 ans, mais leurs os ainsi que leur capacité magiques étant très prisées,
                rare sont les êtres qui arrivent à vivre aussi longtemps.
            </div>
        </div>
        <div class="flex flex-col border border-black">
            <div>Felidrae</div>
            <div>Inconnue</div>
            <div>Les Felidrae sont des humanoides chats, ils vivent seul et il est très rare d’en apercevoir, malgré
                leur apparence peu commune.
            </div>
        </div>
    </div>

@stop
