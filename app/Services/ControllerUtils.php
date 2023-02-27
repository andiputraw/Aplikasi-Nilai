<?php

namespace App\Services;

use App\Services\ControllerUtils as ServicesControllerUtils;
use Illuminate\Http\Request;
use App\Services\Result;


class ControllerUtils
{
    public static function getInputValue(Request $request)
    {
        return $request->all();
    }

    public static function mapInput(array $inputShape, $input)
    {
        $result = [];

        foreach ($inputShape as $element) {
        }
    }

    public static function getFieldFromShape($inputShape)
    {
        $field = [];

        foreach ($inputShape as $input) {
            $field[] = $input['field'];
        }
        return $field;
    }

    public static function getNameFromShape($inputShape)
    {
        $field = [];

        foreach ($inputShape as $input) {
            $field[] = $input['name'];
        }
        return $field;
    }
    public static function createSendIndex(string $title, array  $inputShape, object $model, $option = [])
    {
        return new SendIndex($title, $inputShape, $model, $option);
    }

    public static function createSendCreate(string $title, array $inputShape, $option = [])
    {
        return new SendCreate($title,  $inputShape,  $option);
    }
    public static function createSendEdit(string $title, array $inputShape, $values, $option = [])
    {
        return new SendEdit($title, $inputShape, $values, $option);
    }
    public static function isSuccess(Result $result, $title, string $action)
    {
        if ($result->isSuccess) {
            return redirect('/' . $title)->with('status', 'data berhasil ' . $action);
        }
        return redirect('/' . $title)->with('status', 'data gagal ' . $action . ' ' . $result->reason);
    }
}

class Shape
{

    private $input;

    public function __construct($title, $name)
    {
    }
}

class Send
{
    public $title;
    public $option = [];
}

class SendIndex extends Send
{
    public $dataLabel;
    public $dataField;
    public $dataTable;

    public function __construct($title, $inputShape, $model, $option = [])
    {
        $this->title = $title;
        $this->dataLabel = ServicesControllerUtils::getNameFromShape($inputShape);
        $this->dataField = ServicesControllerUtils::getFieldFromShape($inputShape);
        $this->dataTable = $model->toArray();
        $this->option = $option;
    }

    public function toArray()
    {
        return
            [
                'title' => $this->title,

                'dataLabel' => $this->dataLabel,


                'dataField' => $this->dataField,


                'dataTable' => $this->dataTable
            ];
    }
}

class SendCreate extends Send
{
    public $inputShape;


    public function __construct(string $title, array $inputShape,  $option = [])
    {
        $this->title = $title;
        $this->inputShape = $inputShape;

        $this->option = $option;
    }

    public function toArray()
    {
        return
            [
                'title' => $this->title,

                'inputShape' => $this->inputShape,
            ];
    }
}

class SendEdit extends Send
{
    public $inputShape;
    public $values;
    public function __construct(string $title, array $inputShape, $values,  $option = [])
    {
        $this->title = $title;
        $this->inputShape = $inputShape;
        $this->values = $values->toArray();

        $this->option = $option;
    }
    public function toArray()
    {
        return
            [
                'title' => $this->title,

                'inputShape' => $this->inputShape,
                'values' => $this->values
            ];
    }
}
