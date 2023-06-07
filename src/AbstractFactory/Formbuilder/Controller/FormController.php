<?php

namespace Src\AbstractFactory\Formbuilder\Controller;

use App\Http\Controllers\Controller;
use Src\AbstractFactory\Formbuilder\FormUiBuilderFactory;

class FormController extends Controller
{

    // Todo Resolve In AppServiceProvider
    public function __construct(public FormUiBuilderFactory $factory)
    {
    }


    public function createForm()
    {
        $btn = $this->factory->createButton();
        $input = $this->factory->createInput();
        // send to view :
        return view("testView", compact("input", "btn"));
    }
}
