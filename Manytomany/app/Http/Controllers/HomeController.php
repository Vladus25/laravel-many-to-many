<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class HomeController extends Controller
{

  // Serve per non fare ripetere codice per 2 volte
  private function getValidationRules() {
    return [
      'firstname' => 'required|string|min:2|max:255',
      'lastname' => 'required|string|min:2|max:255',
    ];
  }

  public function home() {

    $employees = Employee::all();
    return view('pages.home', compact('employees'));
  }

  // Serve per fare un altra pagina con info di oggetti
  public function employee($id) {
    $employee = Employee::findorFail($id);

    return view('pages.employee', compact('employee'));
  }

  // Serve per fare un altra pagina dove si puo modificare oggetto
  public function edit($id) {

    $employee = Employee::findorFail($id);

    return view ('pages.edit', compact('employee'));
  }

  // Serve per aggiornare oggetto con dati inseriti
  public function update(Request $request, $id) {

    $validate = $request -> validate($this -> getValidationRules());

    $employee = Employee::findorFail($id);

    $employee -> update($validate);

    return redirect() -> route('employee', $employee -> id);
  }

}
