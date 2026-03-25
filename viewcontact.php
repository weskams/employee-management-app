<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Contacts</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #555; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>All Contacts</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Department</th>
            <th>Position</th>
        </tr>

        <?php
        // Check if the file exists
        if (file_exists("contacts.txt")) {
            $lines = file("contacts.txt");

            foreach ($lines as $line) {
                $contact = json_decode($line, true);

                echo "<tr>";
                echo "<td>" . htmlspecialchars($contact['name']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['email']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['phone']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['address']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['date_of_birth']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['department']) . "</td>";
                echo "<td>" . htmlspecialchars($contact['position']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8' style='text-align:center;'>No contacts found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>