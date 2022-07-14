<?php


namespace crocodicstudio\crudbooster\export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DefaultExportXls implements FromView
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view("crudbooster::export",$this->data);
    }

    public function getCsvSettings(): array {
        return [
            'use_bom' => true,
            'input_encoding' => 'UTF-8'
        ];
    }
}