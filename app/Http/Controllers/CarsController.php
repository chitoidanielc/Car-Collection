<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index')->with('cars', $cars);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'make'        => 'required',
            'model'       => 'required',
            'year'        => 'required',
            'engine'      => 'required',
            'fuel'        => 'required',
            'gearbox'     => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
            if ($validator->fails())
        {
            return Redirect::to('car/create')
                           ->withErrors($validator);
                        //    ->withInput($request->all());
        }
            else
        {
            // store
            $car                  = new Car();
            $car->make            = $request->input('make');
            $car->model           = $request->input('model');
            $car->year            = $request->input('year');
            $car->engine          = $request->input('engine');
            $car->fuel            = $request->input('fuel');
            $car->gearbox         = $request->input('gearbox');
            $car->save();
            // redirect
            return Redirect::to('car');
        }
    }

    public function show($id)
    {
        $car = Car::find($id);

        return view('cars.show')
              ->with('car', $car);
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return view('cars.edit')
                ->with('car', $car);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'make'        => 'required',
            'model'       => 'required',
            'year'        => 'required',
            'engine'      => 'required',
            'fuel'        => 'required',
            'gearbox'     => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails())
        {
            return Redirect::to('car')
                ->withErrors($validator);
        }
        else
        {
            // store
            $car                  = Car::find($id);
            $car->make            = $request->input('make');
            $car->model           = $request->input('model');
            $car->year            = $request->input('year');
            $car->engine          = $request->input('engine');
            $car->fuel            = $request->input('fuel');
            $car->gearbox         = $request->input('gearbox');
            $car->save();
            // redirect
            return Redirect::to('car');
        }
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return Redirect::to('car');
    }
}
