@extends('base')
@section('content')
    <div class="pl-16">

        <div>

            <fieldset
                class="border border-black flex w-64 cursor-pointer select-none hover:scale-110 transition transform"
                onclick="roll20()">
                <legend>
                    <button class="px-2" id="roll20">Roll20 :</button>
                </legend>
                <table>
                    <tr>
                        <td>
                            <div id="roll20-hist" class="flex gap-2 overflow-x-clip w-64 h-10"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <fieldset
                class="border border-black flex w-64 cursor-pointer select-none hover:scale-110 transition transform"
                onclick="roll6()">
                <legend>
                    <button class="px-2" id="roll6">Roll6 :</button>
                </legend>
                <table>
                    <tr>
                        <td>
                            <div id="roll6-hist" class="flex gap-2 overflow-x-clip w-64 h-10"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset
                class="border border-black flex w-64 cursor-pointer select-none hover:scale-110 transition transform"
                onclick="roll4()">
                <legend>
                    <button class="px-2" id="roll4">Roll4 :</button>
                </legend>
                <table>
                    <tr>
                        <td>
                            <div id="roll4-hist" class="flex gap-2 overflow-x-clip w-64 h-10"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset
                class="border border-black flex w-64 cursor-pointer select-none hover:scale-110 transition transform"
                onclick="roll2()">
                <legend>
                    <button class="px-2" id="roll2">Roll2 :</button>
                </legend>
                <table>
                    <tr>
                        <td>
                            <div id="roll2-hist" class="flex gap-2 overflow-x-clip w-64 h-10"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>

        </div>
    </div>

    <script>
        function roll20() {
            let roll = Math.floor(Math.random() * (20 - 1 + 1)) + 1;
            document.getElementById("roll20").textContent = "Roll20 : " + roll.toString();

            var element = document.createElement("div");
            element.appendChild(document.createTextNode(roll.toString()));
            if (roll === 1) {
                element.classList.add("text-red-500")
            } else if (roll === 20) {
                element.classList.add("text-green-500")
            } else if (roll === 10) {
                element.classList.add("text-blue-500")
            }

            document.getElementById('roll20-hist').prepend(element);

        }
        function roll6() {
            let roll = Math.floor(Math.random() * (6 - 1 + 1)) + 1;
            document.getElementById("roll6").textContent = "Roll6 : " + roll.toString();

            var element = document.createElement("div");
            element.appendChild(document.createTextNode(roll.toString()));
            if (roll === 1) {
                element.classList.add("text-red-500")
            } else if (roll === 6) {
                element.classList.add("text-green-500")
            }

            document.getElementById('roll6-hist').prepend(element);

        }
        function roll4() {
            let roll = Math.floor(Math.random() * (4 - 1 + 1)) + 1;
            document.getElementById("roll4").textContent = "Roll4 : " + roll.toString();

            var element = document.createElement("div");
            element.appendChild(document.createTextNode(roll.toString()));
            if (roll === 1) {
                element.classList.add("text-red-500")
            } else if (roll === 4) {
                element.classList.add("text-green-500")
            }

            document.getElementById('roll4-hist').prepend(element);

        }
        function roll2() {
            let roll = Math.floor(Math.random() * (2 - 1 + 1)) + 1;
            document.getElementById("roll2").textContent = "Roll2 : " + roll.toString();

            var element = document.createElement("div");
            element.appendChild(document.createTextNode(roll.toString()));
            if (roll === 1) {
                element.classList.add("text-red-500")
            } else if (roll === 2) {
                element.classList.add("text-green-500")
            }

            document.getElementById('roll2-hist').prepend(element);

        }
    </script>
@stop
