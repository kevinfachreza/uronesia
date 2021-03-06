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

class TraumaExcel implements FromView, WithEvents
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getRowDimension(1)->setRowHeight(35);
                $event->sheet->getRowDimension(2)->setRowHeight(35);
                $event->sheet->getRowDimension(2)->setRowHeight(55);
                $event->sheet->getRowDimension(2)->setRowHeight(100);


                $event->sheet->getColumnDimension('R')->setWidth(37);
                $event->sheet->getColumnDimension('BK')->setWidth(21);
                $event->sheet->getColumnDimension('BL')->setWidth(21);
                $event->sheet->getColumnDimension('BM')->setWidth(21);
                $event->sheet->getColumnDimension('BN')->setWidth(21);
                $event->sheet->getColumnDimension('BO')->setWidth(21);
                $event->sheet->getColumnDimension('BP')->setWidth(21);
                $event->sheet->getColumnDimension('BQ')->setWidth(21);

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

                $data_total = count($this->data['kasus'])+4;



                $event->sheet->styleCells(
                    'A1:AZ4',
                    [
                        'alignment' => $alignment,
                        'font' => $bold,
                        'borders' => [
                            'allBorders' => $border_thin
                        ],
                    ]
                );


                $event->sheet->styleCells(
                    'A5:AZ'.$data_total,
                    [
                        'alignment' => $alignment_top,
                        'borders' => [
                            'allBorders' => $border_thin
                        ],
                    ]
                );
                
                $event->sheet->styleCells(
                    'A4:AZ4'.$data_total,
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
                    'AK1:AK'.$data_total,
                    [
                        'borders' => [
                            'right' => $border_thick
                        ],
                    ]
                );
                $event->sheet->styleCells(
                    'AV1:AV'.$data_total,
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
