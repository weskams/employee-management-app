<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Viewallcontacts.css">
    <title>View All Contacts</title>
</head>
<body class="body">
    <table border="1" cellspacing="0" class="table">
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Department</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
            <script src="viewallcontacts.js"></script>
            <?php
                if (file_exists("contacts.txt")) {
                    $lines = file("contacts.txt");
                    if (!empty($lines)) {
                        foreach ($lines as $line) {
                            $contact = json_decode($line, true);
                            if ($contact) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($contact['name']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['gender']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['phone']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['address']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['date_of_birth']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['department']) . "</td>";
                                echo "<td>" . htmlspecialchars($contact['position']) . "</td>";
                                echo "<td>
                                <button onclick='showDetails(" . json_encode($contact) . ")'>Details</button>
                                <button onclick='editContact(" . json_encode($contact) . ")'>Edit</button>
                                <button onclick='deleteContact(" . json_encode($contact) . ")' class='delete'>Delete</button>
                                </td>";
                                echo "</tr>";
                            }
                            
                        }
                    } else {
                        echo "<tr><td colspan='8' style='text-align:center;'>No contacts found.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' style='text-align:center;'>No contacts found.</td></tr>";
                }
            ?>
</table>
</body>
</html>