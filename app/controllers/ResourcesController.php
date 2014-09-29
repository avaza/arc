 <?php

 use Arc\Validation\ResourceForm;
 use Laracasts\Commander\CommandBus;
class ResourcesController extends \BaseController {

    private $resourceForm;
    private $commandBus;
    function __construct(CommandBus $commandBus, ResourceForm $resourceForm)
    {
        $this->resourceForm = $resourceForm;
    }
    
    /**
	 * Display a listing of the resource.
	 * GET /resources
	 *
	 * @return Response
	 */
	public function index()
	{
        $resources = Resource::all();
        return View::make('resources.index', compact('resources'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /resources/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('resources.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /resources
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->resourceForm->validate(Input::all());
        $resource = Resource::create(
            Input::only('id_number', 'first_name', 'last_name', 'time_zone', 'extension_num', 'extension_pin', 'primary_phone', 'secondary_phone', 'active')
        );
        return Redirect::to('resources');
	}

	/**
	 * Display the specified resource.
	 * GET /resources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $resource = Resource::find($id);
        return View::make('resources.show', compact('resource'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /resources/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $resource = Resource::find($id);
        return View::make('resources.edit', compact('resource'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /resources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->resourceForm->withRulesForUpdate($id)->validate(Input::all());
        $resource = Resource::find($id);
        $resource->id_number = Input::get('id_number');
        $resource->first_name = Input::get('first_name');
        $resource->last_name = Input::get('last_name');
        $resource->time_zone = Input::get('time_zone');
        $resource->extension_num = Input::get('extension_num');
        $resource->extension_pin = Input::get('extension_pin');
        $resource->primary_phone = Input::get('primary_phone');
        $resource->secondary_phone = Input::get('secondary_phone');
        $resource->active = Input::get('active');
        $resource->save();
        return Redirect::to('resources');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /resources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}