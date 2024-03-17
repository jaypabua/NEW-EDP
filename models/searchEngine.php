<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM guest WHERE G_name LIKE '%$value%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;">
                <?= $row['guest_ID'] ?>
            </td>
            <td>
                <?= $row['G_name'] ?>
            </td>
            <td>
                <?= $row['G_lname'] ?>
            </td>
            <td>
                <?= $row['G_address'] ?>
            </td>
            <td>
                <?= $row['G_contactnumber'] ?>
            </td>
            <td class="d-grid">
                <button type="button" 
                class="btn btn-sm btn-block btn-success" 
                data-bs-toggle="modal"
                data-bs-target="#view-details">
                    View
                </button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();