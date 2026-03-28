function showDetails() {
    alert("Showing full employee details...");
}

function editContact() {
    alert("Edit functionality coming soon...");
}

function deleteContact() {
    let confirmDelete = confirm("Are you sure you want to delete?");
    
    if (confirmDelete) {
        alert("Contact deleted");
    } else {
        alert("Delete cancelled");
    }
}