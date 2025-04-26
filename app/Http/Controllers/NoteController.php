<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        $semesters = Semester::all();
        $subjects = Subject::all();
        $notes = Note::where('show', 1)->get(); // Fetch only visible notes

        $notes = Note::all();
        return view('pages.note', compact('programs', 'semesters', 'subjects', 'notes'));
    }

    public function create()
    {
        $programs = Program::all(); // Fetch all programs
        return view('upload-notes', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'program_id' => 'required|exists:programs,id',
            'semester_id' => 'required|exists:semesters,id',
            'subject_id' => 'required|exists:subjects,id',
            'file' => 'required|file|mimes:pdf,txt,jpg,png|max:2048', // 2MB max
        ]);

        // Generate unique slug
        // $slug = Str::slug($request->name);
        // $originalSlug = $slug;
        // $count = 1;
        // while (Note::where('slug', $slug)->exists()) {
        //     $slug = $originalSlug . '-' . $count++;
        // }

        // Store the file
        $file = $request->file('file');
        $filePath = $file->store('notes/' . $request->program_id . '/' . $request->semester_id . '/' . $request->subject_id, 'public');
        $fileUrl = Storage::url($filePath);

        // Save note
        Note::create([
            'name' => $request->name,
            'file' => $fileUrl,
            'show' => 0, // Hidden by default
            'status' => 0, // Pending verification
            'subject_id' => $request->subject_id,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Note uploaded successfully! Awaiting verification.');
    }

    public function getSemesters($programId)
    {
        $semesters = Semester::where('program_id', $programId)->get(['id', 'name']);
        return response()->json($semesters);
    }

    public function getSubjects($semesterId)
    {
        $subjects = Subject::where('semester_id', $semesterId)->get(['id', 'name']);
        return response()->json($subjects);
    }
    // public function download(Note $note)
    // {
    //     return response()->download(storage_path('app/' . $note->file));
    // }

    // public function upload(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:pdf',
    //         'name' => 'required|string',
    //         'semester' => 'required|string',
    //         'program' => 'required|string',
    //         'subject' => 'required|string',
    //         'email' => 'required|email'
    //     ]);

    //     Note::create($request->all());

    //     return back();
    // }
}
