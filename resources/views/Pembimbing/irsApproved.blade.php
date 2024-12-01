<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IRS Approvement</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 90%;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.5rem;
    }

    .details {
      margin-bottom: 20px;
      line-height: 1.5;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 50px;
    }

    th,
    td {
      text-align: center;
      padding: 10px;
    }

    th {
      background-color: #9C89AE;
      color: #333;
    }

    tbody tr:nth-child(odd) {
      background-color: #DBDDF4;
    }

    tbody tr:nth-child(even) {
      background-color: #9C89AE;
    }

    .status-new {
      color: #333;
      font-weight: bold;
    }

    .status-revision {
      color: #333;
      font-weight: bold;
    }

    .actions {
      text-align: center;
    }

    .actions button {
      padding: 10px 20px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
      width: 120px;
    }

    .approve {
      background-color: #4caf50;
      color: white;
    }

    .reject {
      background-color: #f44336;
      color: white;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal:target {
      display: flex;
    }

    .modal-content {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      box-sizing: border-box; /* Prevent overflow */
    }

    .modal-content h3 {
      text-align: left; /* Align the title to the left */
      margin-bottom: 10px;
    }

    .modal-content textarea {
      width: 100%; /* Ensure it fits the modal */
      max-width: 100%; /* Prevent it from exceeding the container width */
      height: 100px;
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box; /* Include padding in width calculations */
    }

    .modal-content button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }

    .close-btn {
      background-color: #f44336;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .submit-btn {
      background-color: #4caf50;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>IRS APPROVEMENT</h1>

    <div class="details">
      <p><strong>Nama</strong>: Sabrina Carpenter</p>
      <p><strong>NIM</strong>: 24060122140115</p>
      <p><strong>Pembimbing Akademik</strong>: Farisah Ghassani Hasyyati</p>
    </div>

    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Kode</th>
          <th>Mata Kuliah</th>
          <th>Ruang</th>
          <th>SKS</th>
          <th>Kelas</th>
          <th>Status</th>
          <th>Nama Dosen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>PAIK6501</td>
          <td>Pemrograman Berbasis Platform</td>
          <td>E101</td>
          <td>4</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Sandy Kurniawan, S.Kom., M.Kom.</td>
        </tr>
        <tr>
          <td>2</td>
          <td>PAIK6301</td>
          <td>Struktur Data</td>
          <td>K101</td>
          <td>4</td>
          <td>B</td>
          <td class="status-revision">PERBAIKAN</td>
          <td>Edy Suharto, S.T., M.Kom.</td>
        </tr>
        <tr>
          <td>3</td>
          <td>PAIK7032</td>
          <td>Komputasi Tersebar dan Paralel</td>
          <td>A303</td>
          <td>3</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Adhe Setya Pramoyoga, M.T.</td>
        </tr>
        <tr>
          <td>4</td>
          <td>PAIK4029</td>
          <td>Proyek Perangkat Lunak</td>
          <td>A303</td>
          <td>3</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Dinar Mutiara Kusumo Nugraheni, S.T., M.InfoTech.(Comp), Ph.D.</td>
        </tr>
        <tr>
          <td>5</td>
          <td>PAIK6708</td>
          <td>Pembelajaran Mesin</td>
          <td>K102</td>
          <td>3</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Dr. Retno Kusumaningrum, S.Si., M.Kom.</td>
        </tr>
        <tr>
          <td>6</td>
          <td>PAIK6504</td>
          <td>Sistem Informasi</td>
          <td>E101</td>
          <td>3</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Beta Noranita, S.Si., M.Kom.</td>
        </tr>
        <tr>
          <td>7</td>
          <td>PAIK6503</td>
          <td>Teori dan Bahasa Automata</td>
          <td>E101</td>
          <td>3</td>
          <td>A</td>
          <td class="status-new">BARU</td>
          <td>Yunila Dwi Putri Ariyanti, S.Kom., M.Kom.</td>
        </tr>
      </tbody>
    </table>

    <div class="actions">
      <form action="#rejectModal" method="get" style="display:inline;">
        <button type="submit" class="reject">Reject</button>
      </form>
      <button class="approve" onclick="alert('IRS Approved')">Approve</button>
    </div>
  </div>

  <!-- Modal -->
  <div id="rejectModal" class="modal">
    <div class="modal-content">
      <h3>Masukan Alasan Penolakan</h3>
      <textarea placeholder="Tuliskan masukan untuk mahasiswa..."></textarea>
      <br>
      <a href="#" class="close-btn">Cancel</a>
      <button class="submit-btn" onclick="alert('Terima kasih')">Submit</button>
    </div>
  </div>
</body>

</html>
