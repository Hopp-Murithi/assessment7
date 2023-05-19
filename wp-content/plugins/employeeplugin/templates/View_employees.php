<?php
global $wpdb;

$employees = $wpdb->get_results("SELECT * FROM wp_employees");
?>

<h1>Employees list</h1>
<div class="container">

    <table>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Department</th>

        </tr>


        <?php
        for ($i = 0; $i < count($employees); $i++) {
        ?>

            <tr>
                <td><?php echo $employees[$i]->id ?></td>
                <td><?php echo $employees[$i]->name ?></td>
                <td><?php echo $employees[$i]->email ?></td>
                <td><?php echo $employees[$i]->phone ?></td>
                <td><?php echo $employees[$i]->department ?></td>
            </tr>
        <?php
        }

        ?>

    </table>

</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=PT+Serif+Caption:400');

    html {
        font-size: 100%;
    }

    body {
        font-size: 16px;
        font-family: 'PT Serif Caption', serif;
        line-height: 1.5;
        background: radial-gradient(#EE0A0A, #ffffff) no-repeat center center fixed;
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