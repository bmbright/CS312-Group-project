<!Doctype html>
<html>
    <body>



        <table id = "colorPickerTable">
            <?php for ($index = 0; $index < $_GET["colors"]; $index++) : ?> 
                <tr>
                    <td>
                        <select id="<?php echo $index?>" name="color" onchange="DropdownValidation(id)">
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
                        
                    <td>
                        <p>Placeholder</p>
                    </td>
                </tr>
            <?php endfor?>
        </table>
            
        <script type= "text/javascript">
            function DropdownValidation(ID){
                var x = window.location.search;
                console.log(x);
                var y = new URLSearchParams(x);
                var rows = y.get('rows');
                var colors = y.get('colors');
                var wholeTable = document.getElementById(ID);
                var value = wholeTable.value;
                if (value == "") {
                    window.alert("Please select an item");
                    return false;
                }
                for (var i = 0; i < colors; i++){
                    if (i != ID) {
                        if (value == document.getElementById(i).value){
                            window.alert("Please select an unused color");
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
</html>