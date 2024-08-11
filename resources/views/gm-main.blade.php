@extends('base')
@section('content')
    <div class="pl-8 grid grid-cols-1 lg:grid-cols-2 gap-10">

        <div>
            <!-- Dices roll -->
            <fieldset
                class="border border-black flex w-80 cursor-pointer select-none hover:scale-110 transition transform"
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
                class="border border-black flex w-80 cursor-pointer select-none hover:scale-110 transition transform"
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
                class="border border-black flex w-80 cursor-pointer select-none hover:scale-110 transition transform"
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
                class="border border-black flex w-80 cursor-pointer select-none hover:scale-110 transition transform"
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
            <!-- End dices roll -->
        </div>
        <div>
            <!-- Ennemies -->
            <fieldset
                class="border border-black flex w-80 lg:w-full">
                <legend>
                    <div class="px-2">Ennemies</div>
                </legend>
                <table>
                    <tr>
                        <td class="grid grid-cols-3 lg:grid-cols-1 gap-4">
                            <button onclick="createEnemy(0, 1, 'T1')">Tier1</button>
                            <button onclick="createEnemy(8, 1.5, 'T2')">Tier2</button>
                            <button onclick="createEnemy(12, 2, 'T3')">Tier3</button>
                            <button onclick="createEnemy(16, 2.6, 'T4')">Tier4</button>
                            <button onclick="createEnemy(24, 3, 'T5')">Tier5</button>
                            <button onclick="createEnemy(30, 4, 'B1')">Boss1</button>
                            <button onclick="createEnemy(40, 6, 'B2')">Boss2</button>
                            <button onclick="createEnemy(50, 8, 'B3')">Boss3</button>
                        </td>
                    </tr>
                    <tr>
                        <td id="enemies">
                        </td>
                    </tr>
                </table>
            </fieldset>
            <!-- End ennemies -->
        </div>
    </div>

    <script>
        // Dices roll
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

        // End ices roll

        function createEnemy(type, hpBoost, name) {

            let addPower = 15 + type;

            let strength = 6;
            let dexterity = 6;
            let constitution = 6;
            let intelligence = 6;
            let wisdom = 6;
            let charisma = 6;

            while (addPower > 0) {
                let addStat = Math.floor(Math.random() * (6 - 1 + 1)) + 1;

                switch (addStat) {
                    case 1:
                        strength += 1;
                        break
                    case 2:
                        dexterity += 1;
                        break
                    case 3:
                        constitution += 1;
                        break
                    case 4:
                        intelligence += 1;
                        break
                    case 5:
                        wisdom += 1;
                        break
                    case 6:
                        charisma += 1;
                        break
                }
                addPower -= 1;
            }

            let health = Math.floor(constitution * hpBoost);
            console.log(strength + "-" + dexterity + "-" + constitution + "-" + intelligence + "-" + wisdom + "-" + charisma + "-" + health)

            var fieldset = document.createElement("fieldset");
            fieldset.classList.add("border", "border-black", "m-2");
            var legend = document.createElement("legend");
            legend.classList.add("px-2");
            legend.textContent = name;
            var removeDiv = document.createElement("span");
            removeDiv.classList.add("ml-2", "cursor-pointer", "text-red-500")
            removeDiv.textContent = "SUPPRIMER";
            removeDiv.onclick = function() {
                fieldset.remove();
            };
            var table = document.createElement("table")
            var tr = document.createElement("tr")
            var td = document.createElement("td")
            td.classList.add("grid", "grid-cols-6", "gap-2")
            var docStrength = document.createElement("div")
            docStrength.textContent = "FOR " + strength.toString();
            var docDexterity = document.createElement("div")
            docDexterity.textContent = "DEX " + dexterity.toString();
            var docConstitution = document.createElement("div")
            docConstitution.textContent = "CON " + constitution.toString();
            var docIntelligence = document.createElement("div")
            docIntelligence.textContent = "INT " + intelligence.toString();
            var docWisdom = document.createElement("div")
            docWisdom.textContent = "SAG " + wisdom.toString();
            var docCharisma = document.createElement("div")
            docCharisma.textContent = "CHA " + charisma.toString();
            var docHealth = document.createElement("div")
            docHealth.textContent = "PDV " + health.toString();

            fieldset.appendChild(legend);
            legend.appendChild(removeDiv);
            fieldset.appendChild(table);
            table.appendChild(tr);
            tr.appendChild(td);
            td.appendChild(docStrength);
            td.appendChild(docDexterity);
            td.appendChild(docConstitution);
            td.appendChild(docIntelligence);
            td.appendChild(docWisdom);
            td.appendChild(docCharisma);
            td.appendChild(docHealth);

            document.getElementById('enemies').appendChild(fieldset);

        }
    </script>
@stop
