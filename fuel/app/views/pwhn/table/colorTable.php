<!Doctype html>
<html>
    <body>

        <p id="warn">
            Please Select an Unused Color
        </p>

        <table id = "colorPickerTable">
            <?php for ($index = 0; $index < $_GET["colors"]; $index++) : ?> 
                <tr>
                    <td class = "col1">
                        <select id="<?php echo $index?>" name="color" onchange="DropdownValidation(id)" onclick="previousColor(id)">
                            <option value="">Select Color...</option>
                            <option value="Red">Red</option>
                            <option value="Orange">Orange</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Green">Green</option>
                            <option value="Blue">Blue</option>
                            <option value="Purple">Purple</option>
                            <option value="Grey">Grey</option>
                            <option value="Brown">Brown</option>
                            <option value="Black">Black</option>
                            <option value="Teal">Teal</option>
                        </select>
                    </td>
                        
                    <td class = "col2">
                        <p>Placeholder</p>
                    </td>
                </tr>
            <?php endfor?>
        </table>
            
        <script type= "text/javascript">
            let previousColorValue;

            function previousColor(ID){
                var oneDropdown = document.getElementById(ID);
                previousColorValue = oneDropdown.value;
            }
            function DropdownValidation(ID){
                var x = window.location.search;
                console.log(x);
                var y = new URLSearchParams(x);
                var rows = y.get('rows');
                var colors = y.get('colors');
                var wholeTable = document.getElementById(ID);
                var value = wholeTable.value;

                for (var i = 0; i < colors; i++){
                    if (i != ID) {
                        if (value == document.getElementById(i).value){
                            document.getElementById("warn").style.display = "inline";
                            document.getElementById(i).value = previousColorValue;
                            return false;
                        }
                    }
                }


                return true;
            }
        </script>

        <table id = "colorTable2">
            <tr>
                <td> <br> </td>
                <?php $string = 'A' ?>
                <?php for ($index = 1; $index < $_GET["rows"]+1; $index++) : ?> 
                    <td> <p> <?php echo $string ?> </p> </td>
                    <?php $string++ ?>
                <?php endfor?>
            </tr>
            <?php for ($index = 1; $index < $_GET["rows"]+1; $index++) : ?>
                <tr>
                    <td>
                        <p> <?php echo $index ?> </p> 
                    </td>
                    <?php for ($index2 = 1; $index2 < $_GET["rows"]+1; $index2++) : ?>
                        <td>  </td>
                    <?php endfor?>
                </tr>
            <?php endfor?>
        </table>
        <button onClick="window.print()">Print this page</button>
    </body>
    <footer>
    <hr>
    <p>&copy; Pets with Human Names, 2023</p>
    <text>Colorado State University - CS312</text>
    <hr>
</footer>    
</html>