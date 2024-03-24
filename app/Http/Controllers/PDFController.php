<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    // public function index()
    // {
    //     return view('pdf.index');
    // }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:10240', // Max 10MB
        ]);

        $file = $request->file('pdf');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('pdfs', $fileName);

        PDFDocument::create([
            'title' => $fileName,
            'file_path' => $filePath,
        ]);

        return redirect()->route('pdf.index')->with('success', 'PDF uploaded successfully.');
    }

    public function show($id)
    {
        $pdfDocument = PDFDocument::findOrFail($id);
        return view('pdf.show', compact('pdfDocument'));
    }
}
