<?php
     namespace App\Http\Controllers;

     use App\Models\Service;
     use App\Models\Contact;
     use Illuminate\Http\Request;

     class AdminController extends Controller
     {
         public function index()
         {
             return view('admin.dashboard');
         }

         public function services()
         {
             $services = Service::all();
             return view('admin.services', compact('services'));
         }

         public function storeService(Request $request)
         {
             $request->validate([
                 'title' => 'required|string|max:255',
                 'description' => 'required|string',
                 'image' => 'nullable|image|max:2048',
             ]);

             $data = $request->only(['title', 'description']);
             if ($request->hasFile('image')) {
                 $data['image'] = $request->file('image')->store('services', 'public');
             }

             Service::create($data);
             return redirect()->route('admin.services')->with('success', 'Layanan berhasil ditambahkan.');
         }

         public function updateService(Request $request, Service $service)
         {
             $request->validate([
                 'title' => 'required|string|max:255',
                 'description' => 'required|string',
                 'image' => 'nullable|image|max:2048',
             ]);

             $data = $request->only(['title', 'description']);
             if ($request->hasFile('image')) {
                 $data['image'] = $request->file('image')->store('services', 'public');
             }

             $service->update($data);
             return redirect()->route('admin.services')->with('success', 'Layanan berhasil diperbarui.');
         }

         public function deleteService(Service $service)
         {
             $service->delete();
             return redirect()->route('admin.services')->with('success', 'Layanan berhasil dihapus.');
         }

         public function contacts()
         {
             $contacts = Contact::all();
             return view('admin.contacts', compact('contacts'));
         }

         public function deleteContact(Contact $contact)
         {
             $contact->delete();
             return redirect()->route('admin.contacts')->with('success', 'Pesan berhasil dihapus.');
         }
     }
     ?>