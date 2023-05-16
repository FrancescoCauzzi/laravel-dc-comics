<?php


namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    private $layoutComponents;
    /*The __construct() function is a special method in PHP classes that is automatically called when an object of the class is created. It is used for initializing object properties or performing any setup tasks that need to be done before using the object.

In the case of the ComicController class, the __construct() function is defined to set up the layout components that are used in multiple methods of the class. The function is called automatically when an instance of the ComicController class is created.

Here's how it works:

    When you create an instance of the ComicController class using $controller = new ComicController();, the __construct() function is automatically executed.

    Inside the __construct() function, the layout components are assigned to the $layoutComponents property using the config() function to retrieve the values from the configuration files.

    The $layoutComponents property now holds the layout components as an associative array.

    Throughout the class, the $layoutComponents array is merged with other arrays using the array_merge() function. This combines the layout components with other specific data arrays (compact()) to create the final array that is passed to the view.

By setting up the layout components in the constructor and reusing them in the different methods of the class, you avoid repeating the code to fetch the layout components in each method. It improves code readability, maintainability, and follows the DRY principle. */
    public function __construct()
    {
        $this->layoutComponents = [
            'footerItems' => config('footerItems'),
            'navbarTop' => config('navbarTop'),
            'navbar' => config('navbar'),
            'dcFeatures' => config('dcFeatures'),
            'dcNavbarBottom' => config('dcNavbarBottom')
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics/index', array_merge(compact('comics'), $this->layoutComponents));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', array_merge(compact('comic'), $this->layoutComponents));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
