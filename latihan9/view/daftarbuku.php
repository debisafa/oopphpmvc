<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DAFTAR BUKU || Debi Safa Nurdewanti G.211.21.0078</title>
   <style>
      body {
         background : linear-gradient(to right, #CCDDEE, #FFCCEE, #CCBBDD);
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         height: 60vh;
      }

      .table {
         border: 3px solid #222;
      }

      tr th {
         border: 3px solid #222;
         padding: 3px 7px;
         font-size: 18px;
      }

      tr td {
         border: 3px solid #222;
         padding: 3px 7px;
         font-size: 16px;
      }

      h3{
         font-size: 27px;
         margin-bottom: 17px;
         text-align: center;
      }

      p {
         text-align: center;
         font-size: 14px;
         margin-top: 22px;
      }
   </style>
</head>

<body>
   <h3>OOP PHP MVC tanpa Framework</h5>
   <table class="table">
      <thead>
         <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         if ($listBuku) {
            foreach ($listBuku as $value) { ?>
               <tr>
                  <td style="text-align: center;"><?= $no++; ?></td>
                  <td><?= $value["Judul"]; ?></td>
                  <td><?= $value["Pengarang"]; ?></td>
                  <td><?= $value["Penerbit"]; ?></td>
                  <td><?= $value["Tahun"]; ?></td>
               </tr>
            <?php
            }
         } 
         else {
            ?>
            <tr>
               <td colspan="5" style="text-align: center;">
                  Data belum ada
               </td>
            </tr>
         <?php } ?>
      </tbody>
   </table>
</body>

</html>