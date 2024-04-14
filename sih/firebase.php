<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <table class="table">
            <thead>
                <th>Truck ID</th>
                <th>Date</th>
                <th>Number of Times Truck Load</th>
                <th>Total Loading per Display</th>
                <th>Total Time Taken (in min)</th>
                <th>Average Truck Payload</th>
                <th>Total Shovel Cycle</th>
                <th>Commulative Unproductive Payload</th>
                <th>Average Time Taken</th>
            </thead>
            <tbody id="tbody1"></tbody>
        </table>
    </div>
    <script type="module">
        var truckno = 0;
        var tbody = document.getElementById('tbody1');

        function aditemtotable(truck_id, date, number_of_times_truck_load, total_loading_per_display, total_time_taken, average_truck_payload, total_shovel_cycle, commulative_unproductive_payload, average_time_taken) {
            var trow = document.createElement("tr");
            var td1 = document.createElement('td');
            var td2 = document.createElement('td');
            var td3 = document.createElement('td');
            var td4 = document.createElement('td');
            var td5 = document.createElement('td');
            var td6 = document.createElement('td');
            var td7 = document.createElement('td');
            var td8 = document.createElement('td');
            var td9 = document.createElement('td');

            td1.innerHTML = ++truckno;
            td2.innerHTML = date;
            td3.innerHTML = number of times truck load;
            td4.innerHTML = total loading per display;
            td5.innerHTML = total time taken;
            td6.innerHTML = average truck payload;
            td7.innerHTML = total shovel cycle;
            td8.innerHTML = commulative unproductive payload;
            td9.innerHTML = average time taken;

            trow.appendChild(td1);
            trow.appendChild(td2);
            trow.appendChild(td3);
            trow.appendChild(td4);
            trow.appendChild(td5);
            trow.appendChild(td6);
            trow.appendChild(td7);
            trow.appendChild(td8);
            trow.appendChild(td9);

            tbody.appendChild(trow);
        }

        function addallitemstotable(thetruck) {
            truckno = 0;
            tbody.innerHTML = "";
            thetruck.forEach(element => {
                aditemtotable(element.truck id, element.date, element.number of times truck load, element.total loading per display, element.total time taken, element.average truck payload, element.total shovel cycle, element.commulative unproductive payload, element.average time taken)
            });
        }

        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
        import { getDatabase, ref, child, get } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-database.js";

  const firebaseConfig = {
    apiKey: "AIzaSyCNtYKAZnTZ4QfrtEXvOtGEzyg1KGvSej8",
    authDomain: "sih1314.firebaseapp.com",
    databaseURL: "https://sih1314-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "sih1314",
    storageBucket: "sih1314.appspot.com",
    messagingSenderId: "809087575306",
    appId: "1:809087575306:web:869e2c48e6c09c1c1646f3",
    measurementId: "G-Q9K7ZDTXLB"
  };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);

        const db = getDatabase();

        function getalldataonce() {
            const dbref = ref(db);

            get(child(dbref, "sheet1"))
                .then((snapshot) => {
                    var truck = [];
                    snapshot.forEach(childsnapshot => {
                        trucks.push(childsnapshot.val());
                    });

                    addallitemstotable(truck);
                })
        }
        window.onload = getalldataonce;
    </script>
</body>

</html>
