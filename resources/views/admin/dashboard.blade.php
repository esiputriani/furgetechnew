<!DOCTYPE html>
     <html lang="id">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Furgetech - Admin Dashboard</title>
         <!-- Tabler.io CSS -->
         <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet">
         <!-- Bootstrap Icons -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
     </head>
     <body>
         <div class="page">
             <!-- Sidebar -->
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
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('admin.contacts') }}">
                                     <i class="bi bi-envelope me-2"></i> Pesan Kontak
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </aside>

             <!-- Main Content -->
             <div class="page-wrapper">
                 <div class="page-header d-print-none">
                     <div class="container-xl">
                         <h2 class="page-title">Dashboard</h2>
                     </div>
                 </div>
                 <div class="page-body">
                     <div class="container-xl">
                         <div class="row row-cards">
                             <div class="col-md-6">
                                 <div class="card">
                                     <div class="card-body">
                                         <h3 class="card-title">Total Layanan</h3>
                                         <p class="h1">{{ \App\Models\Service::count() }}</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="card">
                                     <div class="card-body">
                                         <h3 class="card-title">Total Pesan</h3>
                                         <p class="h1">{{ \App\Models\Contact::count() }}</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Tabler.io JS -->
         <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
     </body>
     </html>