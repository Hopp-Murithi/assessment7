<?php
global $wpdb;

$members = $wpdb->get_results("SELECT * FROM a5_members");
?>

<h1>All cohort members</h1>
<div class="container">

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Age</th>

        </tr>


        <?php
        for ($i = 0; $i < count($members); $i++) {
        ?>

            <tr>
                <td><?php echo $members[$i]->name ?></td>
                <td><?php echo $members[$i]->email ?></td>
                <td><?php echo $members[$i]->phone ?></td>
                <td><?php echo $members[$i]->age ?></td>
            </tr>
        <?php
        }

        ?>

    </table>

</div>
<style>
    body {
        font-size: 16px;
        line-height: 1.5;
        background: radial-gradient(#0B20D8, #ffffff) no-repeat center center fixed;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
    }

    table {
        background-color: antiquewhite;
        color: black;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 4px 12px;
    }
</style>