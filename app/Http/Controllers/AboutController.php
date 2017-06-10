<?php namespace fooCart\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {

    /**
     * Display the About page.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $contacted = ($request->cookie('contacted')) ? $request->cookie('contacted') : false;
        return view('public.about')
            ->withContacted($contacted);
    }

    public function contacto(Request $request)
    {
        return view('frontend.contacto');
    }

    public function acercanosotros(Request $request)
    {
        return view('frontend.acercanosotros');
    }
    public function ubicacion(Request $request)
    {
        return view('frontend.ubicacion');
    }
}
