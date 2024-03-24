<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnotationPdfController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'pdf_document_id' => 'required|exists:pdf_documents,id',
            'topic' => 'required',
            'highlighted_text' => 'required',
            'note' => 'required',
            'page_number' => 'required|integer',
        ]);

        PDFAnnotation::create($request->all());

        return redirect()->back()->with('success', 'Annotation added successfully.');
    }
}
