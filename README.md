Easy way to read Excel file it is to use PHP Office free library

Requirements
------------

The following requirements should be met prior to using PHPExcel:
* PHP version 5.2.0 or higher
* PHP extension php_zip enabled *)
* PHP extension php_xml enabled
* PHP extension php_gd2 enabled (if not compiled in)

*) php_zip is only needed by PHPExcel_Reader_Excel2007, PHPExcel_Writer_Excel2007,
   PHPExcel_Reader_OOCalc. In other words, if you need PHPExcel to handle .xlsx or .ods
   files you will need the zip extension, but otherwise not.


Use composer to install PHP Office excel

composer require phpoffice/phpspreadsheet


