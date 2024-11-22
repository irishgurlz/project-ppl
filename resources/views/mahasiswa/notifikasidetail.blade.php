<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .notif-list {
            margin-top: 20px;
        }
        .notif-list .notif-item {
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .notif-list .notif-item:hover {
            background-color: #f1f1f1;
        }
        .notif-detail-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .notif-detail-container h3 {
            font-size: 1.8rem;
            color: #353E6C;
        }
        .back-button {
            margin-top: 20px;
            text-align: right;
        }
        .back-button a {
            text-decoration: none;
            color: #007bff;
            font-size: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <!-- Daftar Notifikasi -->
        <div class="col-md-6 notif-list">
            <h4>Notifications</h4>
            <div id="notifList">
                <!-- Notifikasi akan ditampilkan di sini -->
            </div>
        </div>
        
        <!-- Detail Notifikasi -->
        <div class="col-md-6" id="notifDetail" style="display:none;">
            <div class="notif-detail-container">
                <h3 id="notifTitle"></h3>
                <p id="notifMessage"></p>
                <div id="notifDate" class="notif-date"></div>
                <div class="back-button">
                    <a href="#" onclick="goBack()">Back to Notifications</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Data notifikasi (contoh data statis)
    const notifications = [
        {
            id: 1,
            title: "IRS Submission Deadline Approaching",
            message: "Dear Yesi, please complete your IRS submission by September 15, 2024.",
            created_at: "2024-09-01 10:30"
        },
        {
            id: 2,
            title: "IRS Approved by Academic Advisor",
            message: "Dear Yesi, Congratulations! Your IRS for the upcoming semester has been approved.",
            created_at: "2024-08-25 14:20"
        },
        {
            id: 3,
            title: "New Semester Registration Open",
            message: "The registration for the new semester is now open. Please fill your IRS.",
            created_at: "2024-09-05 08:10"
        }
    ];

    // Fungsi untuk menampilkan daftar notifikasi
    function displayNotifications() {
        const notifListContainer = document.getElementById('notifList');
        notifListContainer.innerHTML = ''; // Kosongkan daftar notifikasi
        notifications.forEach(notif => {
            const notifElement = document.createElement('div');
            notifElement.classList.add('notif-item');
            notifElement.textContent = notif.title;
            notifElement.onclick = () => showDetail(notif.id); // Saat diklik, tampilkan detail
            notifListContainer.appendChild(notifElement);
        });
    }

    // Fungsi untuk menampilkan detail notifikasi
    function showDetail(id) {
        const notif = notifications.find(n => n.id === id);
        if (notif) {
            document.getElementById('notifTitle').textContent = notif.title;
            document.getElementById('notifMessage').textContent = notif.message;
            document.getElementById('notifDate').textContent = `Date: ${notif.created_at}`;
            
            // Sembunyikan daftar notifikasi dan tampilkan detail
            document.getElementById('notifList').style.display = 'none';
            document.getElementById('notifDetail').style.display = 'block';
        }
    }

    // Fungsi untuk kembali ke daftar notifikasi
    function goBack() {
        document.getElementById('notifList').style.display = 'block';
        document.getElementById('notifDetail').style.display = 'none';
    }

    // Menampilkan daftar notifikasi saat halaman dimuat
    window.onload = displayNotifications;
</script>

</body>
</html>
