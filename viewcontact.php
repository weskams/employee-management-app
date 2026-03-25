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