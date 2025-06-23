<!DOCTYPE html>
     <html lang="id">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Furgetech - Kelola Pesan Kontak</title>
         <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
     </head>
     <body>
         <div class="page">
             <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
                 <div class="container-fluid">
                     <h1 class="navbar-brand navbar-brand-autodark">
                         <a href="/admin">Furgetech Admin</a>
                     </h1>
                     <div class="collapse navbar-collapse">
                         <ul class="navbar-nav">
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                     <i class="bi bi-house me-2"></i> Dashboard
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('admin.services') }}">
                                     <i class="bi bi-gear me-2"></i> Layanan
                                 </a>
                             </li>
                             <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('admin.contacts') }}">
                                     <i class="bi bi-envelope me-2"></i> Pesan Kontak
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </aside>

             <div class="page-wrapper">
                 <div class="page-header d-print-none">
                     <div class="container-xl">
                         <h2 class="page-title">Kelola Pesan Kontak</h2>
                     </div>
                 </div>
                 <div class="page-body">
                     <div class="container-xl">
                         @if (session('success'))
                             <div class="alert alert-success">{{ session('success') }}</div>
                         @endif
                         <div class="card">
                             <div class="card-body">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>Nama</th>
                                             <th>Email</th>
                                             <th>Pesan</th>
                                             <th>Tanggal</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($contacts as $contact)
                                             <tr>
                                                 <td>{{ $contact->name }}</td>
                                                 <td>{{ $contact->email }}</td>
                                                 <td>{{ Str::limit($contact->message, 50) }}</td>
                                                 <td>{{ $contact->created_at->format('d M Y') }}</td>
                                                 <td>
                                                     <form action="{{ route('admin.contacts.delete', $contact) }}" method="POST" style="display:inline;">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
                                                     </form>
                                                 </td>
                                             </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
     </body>
     </html>