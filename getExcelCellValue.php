<?php
require __DIR__.'/vendor/autoload.php';
$inputFileName = './data.xlsx';
	

	/** Input file name, Excel file format (xslx), max rows in Excel file **/
	
$sheetname = 'TDSheet'; 
	$inputFileType = 'Excel2007'; 
  $max_count_value = 100;
	
/**  Create a new Reader of the type defined in $inputFileType  **/
	$objReader = PHPExcel_IOFactory::createReader($inputFileType);

	/**  Set which WorkSheets we want to load  **/ 
	$objReader->setLoadSheetsOnly($sheetname); 

	/**  Load $inputFileName to a PHPExcel Object  **/
	$objPHPExcel = $objReader->load($inputFileName);


/* Find something by first row field */
	function findByBarCode ($barcode,$objPHPExcel) {
	
		$findString = $barcode;

	
		while($i < $max_count_value) {
			
			$current_string = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getValue();
			
			if ($current_string == $findString) {
				$result = 'Bar Code ' . $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getValue();
				$result .= ' Name: ' . $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getValue();
				$result .= ' Price: (rozn) ' . $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getValue();
	
			}
			
		}
		
		if (null==$result)	$result = 'Позиция не найдена ('; 
		
		return $result;
	
	
	}
	
/* findByBarCode() - find by string in excel file function
  @params:
  findString (string) - string to find
  objPHPExcel (object) - PHP Office Object
*/
	$resultToTelegram = findByBarCode($findString, $objPHPExcel);

?>
