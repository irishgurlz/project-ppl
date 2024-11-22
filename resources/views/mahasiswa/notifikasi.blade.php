<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>
        .notif-tabs {
            display: flex;
            justify-content: flex-start;
            border-bottom: 2px solid #ccc;
            margin-bottom: 10px;
        }

        .notif-tabs div {
            padding: 10px 20px;
            cursor: pointer;
            position: relative;
        }

        .notif-tabs div.active {
            font-weight: bold;
            border-bottom: 3px solid #007bff;
        }

        .notif-item {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Memastikan isi dan tanggal berada di ujung */
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
            cursor: pointer;
        }

        .notif-item .icon {
            margin-right: 15px;
            font-size: 24px;
        }

        .notif-item .notif-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Membuat konten notifikasi mengisi ruang */
        }

        .notif-item h6 {
            margin: 0;
            font-weight: 500;
        }

        .notif-item p {
            margin: 0;
            color: #666;
            font-size: 0.9rem;
        }

        .notif-item .notif-date {
            color: #999;
            font-size: 0.9rem; /* Ukuran font untuk tanggal */
            white-space: nowrap; /* Mencegah pembungkusan teks */
        }
        .notif-item[data-status="unread"] {
            font-weight: bold;
            color: black; /* Warna teks hitam untuk notifikasi yang belum dibaca */
        }

        .notif-item[data-status="read"] {
            font-weight: normal;
            color: black; /* Warna teks medium untuk notifikasi yang sudah dibaca */
        }

    </style>
</head>
<body>
<main class="container-fluid my-0 p-0">
    <div class="row g-0">
        <!-- Kolom 1 (Sidebar) -->
        <div class="col col-sm-12 col-md-2 col-lg-2 p-2">
            @include("mahasiswa/partial/sidebar")
        </div>
        
        <!-- Kolom 2 (Notifikasi) -->
        <div class="col col-sm-12 col-md-10 col-lg-10 d-flex flex-column justify-content-start p-2 pt-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="text-black column-title d-flex justify-content-start">
                    <p class="fw-bold" style="font-size: 1.6rem; color: #353E6C">Notifikasi</p>
                </div>
                <form class="d-flex" style="width: 220px; margin-left: 1000px;">
                    <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search" style="border-radius: 15px;">
                </form>
                <div class="profile-pic">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('img/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; margin-left: 4px;">
                </a>
            </div>
            </div>
            <div class="bg-white column-title d-flex flex-column" style="width:98%; border-radius: 15px; margin: 0; position: relative; padding: 20px;">
                <div class="notif-tabs">
                    <div id="all-tab" class="active" onclick="filterNotifications('all')">Semua</div>
                    <div id="unread-tab" onclick="filterNotifications('unread')">Belum Dibaca</div>
                    <div id="archived-tab" onclick="filterNotifications('archived')">Arsip</div>
                </div>
                <div id="notificationList">
                    <!-- Notifikasi 1 -->
                    <div class="notif-item" data-id="1" data-status="unread" onclick="showDetail(1)">
                        <div class="icon text-warning">&#128276;</div>
                        <div class="notif-content">
                            <h6>IRS Submission Deadline Approaching</h6>
                            <p>Dear Yesi, complete your IRS submission by September 15, 2024.</p>
                        </div>
                        <div class="notif-date">8 September 2024 at 09:00 AM</div>
                    </div>

                    <!-- Notifikasi 2 -->
                    <div class="notif-item" data-id="2" data-status="unread" onclick="showDetail(2)">
                        <div class="icon text-warning">&#128276;</div>
                        <div class="notif-content">
                            <h6>IRS Approved by Academic Advisor</h6>
                            <p>Dear Yesi, Congratulations! Your IRS for the upcoming semester has been approved.</p>
                        </div>
                        <div class="notif-date">17 September 2024 at 10:00 AM</div>
                    </div>

                    <!-- Notifikasi 3 -->
                    <div class="notif-item" data-id="3" data-status="archived" onclick="showDetail(3)">
                        <div class="icon text-warning">&#128276;</div>
                        <div class="notif-content">
                            <h6>Good news! The course you were waiting is now available</h6>
                            <p>Dear Yesi, you can now register for the course.</p>
                        </div>
                        <div class="notif-date">8 September 2024 at 09:00 AM</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal untuk menampilkan detail notifikasi -->
<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Detail Notifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="notifDetail">
                <!-- Isi detail notifikasi akan dimasukkan di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    const notifications = [
        { id: 1, title: "IRS Submission Deadline Approaching", message: "Dear Yesi, complete your IRS submission by September 15, 2024.", date: "8 September 2024 at 09:00 AM", status: "unread" },
        { id: 2, title: "IRS Approved by Academic Advisor", message: "Dear Yesi, Congratulations! Your IRS for the upcoming semester has been approved.", date: "17 September 2024 at 10:00 AM", status: "read" },
        { id: 3, title: "Good news! The course you were waiting is now available", message: "Dear Yesi, you can now register for the course.", date: "8 September 2024 at 09:00 AM", status: "archive" },
    ];

    // Filter notifications based on status (all, unread, archived)
    function filterNotifications(status) {
        const tabs = document.querySelectorAll('.notif-tabs div');
        tabs.forEach(tab => tab.classList.remove('active'));
        
        if (status === 'all') {
            document.getElementById('all-tab').classList.add('active');
        } else if (status === 'unread') {
            document.getElementById('unread-tab').classList.add('active');
        } else {
            document.getElementById('archived-tab').classList.add('active');
        }

        const filteredNotifications = notifications.filter(notification => status === 'all' || notification.status === status);
        const notifList = document.getElementById('notificationList');
        notifList.innerHTML = '';
        filteredNotifications.forEach(notification => {
            const notifElement = document.createElement('div');
            notifElement.classList.add('notif-item');
            notifElement.setAttribute('data-id', notification.id);
            notifElement.setAttribute('data-status', notification.status);
            notifElement.innerHTML = `
                <div class="icon text-warning">&#128276;</div>
                <div class="notif-content">
                    <h6>${notification.title}</h6>
                    <p>${notification.message}</p>
                </div>
                <div class="notif-date">${notification.date}</div>
            `;
            notifElement.onclick = () => showDetail(notification.id);
            notifList.appendChild(notifElement);
        });
    }

    function showDetail(id) {
        const notification = notifications.find(notification => notification.id === id);
        const modalBody = document.getElementById('notifDetail');
        modalBody.innerHTML = `
            <h6>${notification.title}</h6>
            <p>${notification.message}</p>
            <p><strong>Tanggal:</strong> ${notification.date}</p>
        `;
        const modal = new bootstrap.Modal(document.getElementById('notificationModal'));
        modal.show();
    }

    // Default to showing all notifications
    filterNotifications('all');
</script>
</body>
</html>
