    <?php include "header.php" ?>

    <h3> 3.1 Write a simple PHP script to print your information (Name and your group id) </h3>
    <?php
    echo "Sara-Sofia Paananen <br>";
    echo "BBCAP22";
    ?>
    <h3> 3.2 Write PHP code to display the following message </h3>
    <?php
    echo "Hello World! My name is \"David\"";
    ?>
    <h3> 3.3 Write the PHP code in to display the current date </h3>
    <?php echo date("d.m.Y") ?>

                <script>
                    document.write("Hello world this is JavaScript")
                </script>
                <noscript>
                    Please enable JavaScript to view this content
                </noscript>
                <input type="button" onclick="hello()" value="Click Me">

                <script>
                //windows alert box
                //window.alert("This will trigger an alert box");
                //window.alert(5+10);
                //document.write 
                document.write("Hello this is interesting");
                </script>

                <button onclick="add()"> Click to Add </button>

                <hr>
                <p id="place1" style="color:purple; background-color:aqua;"></p>
                <span id="place2" style="color:purple; background-color:beige;"></span>
                <script>
                    document.getElementById("place1").innerHTML = "This will go to place1";
                    document.getElementById("place2").innerHTML = "This will go to place2";
                </script>
                <form>
                <input type="color" name="background">
                </form>

                <h2> Changing background-color </h2>
                <form>
                <input type="color" name="background" onchange="changeColor('background', this.value)">
                </form>

    <h3> 3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>

    <h3> 3.5 Use HTML table into echo and include 3 columns S.n., Name, and grade. </h3>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 3;
    echo "
    <table>
    <tr>
    <th>S.N</th><th>Name</th><th>Grade</th>
    </tr>
    <tr>
    <td>1</td><td>Pekka</td><td>$g1</td>
    </tr>
    <tr>
    <td>2</td><td>Johanna</td><td>$g2</td>
    </tr>
    <tr>
    <td>3</td><td>John</td><td>$g3</td>
    </tr>
    </table>
    ";
    ?>

    <h3> 4. Take a screenshot of development environment </h3>
    <img src="proofpic.jpg" alt="exercise 4">

    <?php include "footer.php" ?>


