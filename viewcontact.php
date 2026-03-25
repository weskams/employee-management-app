<?php
    if (file_exists("contacts.txt")) {
        $contacts = file("contacts.txt");

        foreach ($contacts as $line) {
            $contact = json_decode($line, true);

            echo "<tr>
                <td>{$contact['name']}</td>
                <td>{$contact['gender']}</td>
                <td>{$contact['email']}</td>
                <td>{$contact['phone']}</td>
                <td>{$contact['address']}</td>
                <td>{$contact['date_of_birth']}</td>
                <td>{$contact['department']}</td>
                <td>{$contact['position']}</td>
            </tr>";
        }
    }
?>