<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{asset('assets/css/dasmen.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/paymin.css')}}">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB SMK WIKRAMA BOGOR</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">PPDB WIKRAMA</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="/admin">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="/payadmin">
          <i class='bx bx-credit-card'></i>
          <span class="links_name">Payment</span>
        </a>
        <span class="tooltip">Payment</span>
      </li>
      <li>
        <a href="/">
          <i class='bx bx-home'></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          {{-- <div class="name">{{$data->name}}</div>
          <div class="job">{{$data->nisn}}</div> --}}
        </div>
        <a href="/logout"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>

 <body>
<!-- partial:index.partial.html -->
<h1>
  Data Siswa
</h1>
<br>
<main>
  <table>
    <thead>
      <tr>
        <th>Bank</th>
        <th>Pemilik Rekening </th>
        <th>Nomor Telephone</th>
        <th>Bukti</th>
        <th>Detail Pembayaran</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($user as $item)
      <tr>
        <td data-title='Bank'>
        {{$item->bank}}
        </td>
        <td data-title='Rekening'>
        {{$item->rekening}}        
        </td>
        <td data-title='tlp'>
        {{$item->tlp}}        
        </td>
        <td data-title='bukti'>
        <a href="/bukti/{{$item['id']}}" style="color:#fff;">Lihat</a>
        </td>
        <td data-title='detail'>
        <a href="/detail/{{$item['id']}}" style="color:#fff;">Lihat</a>
        </td>        
        <td class='select' display="flex">
        @if ($item->payment == null)
        Belum melakukan Pembayaran
        @elseif($item->payment->status == 'Pending')
        <form action="/admin-success/{{$item['id']}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="sumbit" class="button">Verifikasi</button>     
            </form>
        <form action="/admin-failed/{{$item['id']}}" method="POST">
        @csrf
        @method('PATCH')
          <button type="sumbit" class="button">Tolak</button> 
        </form>
        @elseif($item->payment->status == 'Success')
        Success 
        @elseif($item->payment->status == 'Failed')
        Failed 
        @endif     
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
    
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }
</script>
</body>

</html>