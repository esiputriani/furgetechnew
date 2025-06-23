<!DOCTYPE html>
     <html lang="id">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Furgetech - Kelola Layanan</title>
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
                             <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('admin.services') }}">
                                     <i class="bi bi-gear me-2"></i> Layanan
                                 </a>
                             </li>
                             <li class="nav-item">
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
                         <h2 class="page-title">Kelola Layanan</h2>
                         <div class="ms-auto">
                             <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-service">
                                 <i class="bi bi-plus me-2"></i> Tambah Layanan
                             </a>
                         </div>
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
                                             <th>Judul</th>
                                             <th>Deskripsi</th>
                                             <th>Gambar</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($services as $service)
                                             <tr>
                                                 <td>{{ $service->title }}</td>
                                                 <td>{{ Str::limit($service->description, 50) }}</td>
                                                 <td>
                                                     @if ($service->image)
                                                         <img src="{{ asset('storage/' . $service->image) }}" width="50" alt="{{ $service->title }}">
                                                     @else
                                                         -
                                                     @endif
                                                 </td>
                                                 <td>
                                                     <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-service-{{ $service->id }}">Edit</a>
                                                     <form action="{{ route('admin.services.delete', $service) }}" method="POST" style="display:inline;">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus layanan ini?')">Hapus</button>
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

         <!-- Modal Tambah Layanan -->
         <div class="modal modal-blur fade" id="modal-add-service" tabindex="-1">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">Tambah Layanan</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                     </div>
                     <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="modal-body">
                             <div class="mb-3">
                                 <label class="form-label">Judul</label>
                                 <input type="text" name="title" class="form-control" required>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Deskripsi</label>
                                 <textarea name="description" class="form-control" rows="4" required></textarea>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Gambar</label>
                                 <input type="file" name="image" class="form-control">
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>

         <!-- Modal Edit Layanan -->
         @foreach ($services as $service)
             <div class="modal modal-blur fade" id="modal-edit-service-{{ $service->id }}" tabindex="-1">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title">Edit Layanan</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="modal-body">
                                 <div class="mb-3">
                                     <label class="form-label">Judul</label>
                                     <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Deskripsi</label>
                                     <textarea name="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Gambar</label>
                                     <input type="file" name="image" class="form-control">
                                     @if ($service->image)
                                         <img src="{{ asset('storage/' . $service->image) }}" width="100" class="mt-2">
                                     @endif
                                 </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                     <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             @endforeach

             <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
         </body>
         </html>