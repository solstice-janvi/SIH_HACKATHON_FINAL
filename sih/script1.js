window.onload = function() {
    const statusContainer = document.getElementById('statusContainer');
    const addStatusForm = document.getElementById('addStatusForm');
    const statusInput = document.getElementById('statusInput');

    // Function to fetch and display dumper statuses
    function displayDumperStatuses() {
        fetch('api.php')
            .then(response => response.json())
            .then(data => {
                statusContainer.innerHTML = ''; // Clear previous statuses
                data.dumpers.forEach(dumper => {
                    const div = document.createElement('div');
                    div.classList.add('dumper-status');
                    div.innerText = `Dumper ${dumper.id}: ${dumper.status}`;
                    statusContainer.appendChild(div);
                });
            })
            .catch(error => console.error('Error:', error));
    }

    // Display initial statuses
    displayDumperStatuses();

    // Handle form submission to add new status
    addStatusForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const newStatus = statusInput.value;
        if (newStatus.trim() !== '') {
            fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `status=${encodeURIComponent(newStatus)}`
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message); // Log success message
                displayDumperStatuses(); // Refresh statuses after adding new status
                statusInput.value = ''; // Clear input field
            })
            .catch(error => console.error('Error:', error));
        }
    });
};
