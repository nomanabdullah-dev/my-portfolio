<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Fact;
use App\Models\Portfolio_Category;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Social_Icon;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Portfolio_Project;
use App\Models\Project_Image;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $user = User::first();
        $about = About::first();
        $facts = Fact::all();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $socials = Social_Icon::all();
        $categories = Portfolio_Category::all();
        $projects = Portfolio_Project::all();
        return view('index', compact('user', 'about', 'facts', 'skills', 'educations', 'experiences', 'services', 'testimonials', 'socials', 'categories', 'projects'));
    }


    public function portfolio_details($id)
    {
        $project = Portfolio_Project::find($id);
        $project_images = Project_Image::where('project_id', $id);
        return view('portfolio-details',compact('project', 'project_images'));
    }


    public function msg_store(Request $request, Contact $contact)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required|min:20',
        ]);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        Session::flash('send-message', 'Your message sent successfully!');
        return redirect()->back();
    }

}
