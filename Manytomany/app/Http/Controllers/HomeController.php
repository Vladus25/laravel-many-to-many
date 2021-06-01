<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Location;

class HomeController extends Controller
{
  public function home() {

    $employees = Employee::all();
    $tasks = Task::all();
    $locations = Location::all();
    return view('pages.home', compact('employees', 'tasks', 'locations'));
  }
}
