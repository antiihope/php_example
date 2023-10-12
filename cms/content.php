<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/connection.php'); ?>

<table id="structure">
    <tr>
        <td id="navigation">
            <ul class="subjects">

                <?php
                echo "they said\n
                multiline\n 
                is allowed";
                // get subjects from database
                $subject_set = get_all_subjects();

                while ($row = $subject_set->fetch_assoc()) {
                    echo "<li>{$row["menu_name"]}</li>";
                    // now get pages for this subject
                    $page_set = get_pages_for_subject($row["id"]);
                    // aand display them
                    echo "<ul class=\"pages\">";
                    while ($row = $page_set->fetch_assoc()) {
                        echo "<li>{$row["menu_name"]}</li>";
                    }
                    echo "</ul>";
                }

                ?>

            </ul>
        </td>
        <td id="page">
            <h2>Content Area</h2>
        </td>
    </tr>
</table>
<?php require_once('includes/footer.php'); ?>