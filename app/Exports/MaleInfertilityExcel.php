<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Sheet;

class MaleInfertilityExcel implements FromView, WithEvents
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                
                $alignment = 
                [
                    'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'horizontal'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'wrapText'     => TRUE,
                    'textRotation' => 0
                ];
                $alignment_top = 
                [
                    'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
                    'horizontal'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'wrapText'     => TRUE,
                    'textRotation' => 0
                ];
                $bold = 
                [
                    'bold' => true,
                ];
                $border_thin = 
                [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '00000000'],
                ];
                $border_thick = 
                [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => '00000000'],
                ];

                $data_total = count($this->data['kasus'])+6;



                $event->sheet->styleCells(
                    'A1:CI6',
                    [
                        'alignment' => $alignment,
                        'font' => $bold,
                        'borders' => [
                            'allBorders' => $border_thin
                        ],
                    ]
                );


                $event->sheet->styleCells(
                    'A7:CI'.$data_total,
                    [
                        'alignment' => $alignment_top,
                        'borders' => [
                            'allBorders' => $border_thin
                        ],
                    ]
                );
                
                $event->sheet->styleCells(
                    'A4:CI6',
                    [
                        'borders' => [
                            'bottom' => $border_thick
                        ],
                    ]
                );
                $event->sheet->styleCells(
                    'I1:I'.$data_total,
                    [
                        'borders' => [
                            'right' => $border_thick
                        ],
                    ]
                );
                $event->sheet->styleCells(
                    'BV1:BV'.$data_total,
                    [
                        'borders' => [
                            'right' => $border_thick
                        ],
                    ]
                );
                $event->sheet->styleCells(
                    'CF1:CF'.$data_total,
                    [
                        'borders' => [
                            'right' => $border_thick
                        ],
                    ]
                );

            },
        ];
    }

    public function __construct($data){
        $this->data = $data;
    }

    public function view(): View
    {
        return view($this->data['view'],$this->data);
    }
}
