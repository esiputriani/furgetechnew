<?php
     namespace App\Http\Controllers;

     use App\Models\Service;
     use App\Models\Contact;
     use Illuminate\Http\Request;
     

     class HomeController extends Controller
     {
         public function index()
         {
             $services = Service::all();
             return view('home', compact('services'));
         }

         public function storeContact(Request $request)
         {
             $request->validate([
                 'name' => 'required|string|max:255',
                 'email' => 'required|email|max:255',
                 'message' => 'required|string',
             ]);

             Contact::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'message' => $request->message,
             ]);

             return redirect()->route('home')->with('success', 'Pesan berhasil dikirim!');
         }

         public function showService($id)
         {
             $service = Service::findOrFail($id);
             return view('service-detail', compact('service'));
         }
     }
     ?>