<?php include 'header.php'?>

<html>
<head>
    <title>CSIS 250 resources</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div>
    <div class="header">
        <h2>CSIS 250</h2>
    </div>

    <div class="content">
        <?php
        // Connect to the database
        $dbLink = new mysqli('localhost', 'root', '', 'classfiles');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

        // Query for a list of all existing files
        $sql = 'SELECT `id`, `name`, `mime`, `size`, `created` FROM `cs255files`';
        $result = $dbLink->query($sql);

        // Check if it was successful
        if($result) {
            // Make sure there are some files in there
            if($result->num_rows == 0) {
                echo '<p>There are no files in the database</p>';
            }
            else {
                // Print the top of a table
                echo '<table width="100%">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Mime</b></td>
                    <td><b>Size (bytes)</b></td>
                    <td><b>Created</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';

                // Print each file
                while($row = $result->fetch_assoc()) {
                    echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['mime']}</td>
                    <td>{$row['size']}</td>
                    <td>{$row['created']}</td>
                   <td><a href='cs255getfile.php?id={$row['id']}'>Download</a></td>
                </tr>";
                }

                // Close table
                echo '</table>';
            }

            // Free the result
            $result->free();
        }
        else
        {
            echo 'Error! SQL query failed:';
            echo "<pre>{$dbLink->error}</pre>";
        }

        // Close the mysql connection
        $dbLink->close();
        ?>
    </div>
</div>
<?php include "footer.php" ?>

</body>
</html>