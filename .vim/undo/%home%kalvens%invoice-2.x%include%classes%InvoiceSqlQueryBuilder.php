Vim�UnDo� ���tj��.��l���\R��	,e���2��;�   �   	const JOIN_TABLES = [   (         3       3   3   3    YG�>    _�                             ����                                                                                                                                                                                                                                                                                                                                                             YDK�     �                   5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDK�     �                 ?>15�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDK�     �                �             5�_�                       #    ����                                                                                                                                                                                                                                                                                                                                                             YDK�     �               1class InvoiceSqlQueryBuilder extend AbstractClass5�_�                       2    ����                                                                                                                                                                                                                                                                                                                                                             YDK�     �               2class InvoiceSqlQueryBuilder extends AbstractClass5�_�                       <    ����                                                                                                                                                                                                                                                                                                                                                             YDL     �               >class InvoiceSqlQueryBuilder extends AbstractSqlQueryBuilder{}5�_�                       >    ����                                                                                                                                                                                                                                                                                                                                                             YDL     �               ?class InvoiceSqlQueryBuilder extends AbstractSqlQueryBuilder {}5�_�      	                      ����                                                                                                                                                                                                                                                                                                                                                             YDL     �                5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                                                             YDL     �               >class InvoiceSqlQueryBuilder extends AbstractSqlQueryBuilder {    �               	5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                                                             YDL     �             �             5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                             YDL     �         "      	const validColumns = array(5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL%     �         "    5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL0     �         #      	const DEFINITIONS = array(5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             YDLT     �       ,   #    �       !   #    5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                             YDL_     �   "   #          >		* allows easy lookup for building JOINs in the SQL statement   	  */5�_�                    !       ����                                                                                                                                                                                                                                                                                                                                                             YDL_     �       !          	/**   8		* @var string[] $tableKeys primary keys for each table5�_�                    !       ����                                                                                                                                                                                                                                                                                                                                                             YDLc     �       "   *      	const tableKeys = array(5�_�                    !       ����                                                                                                                                                                                                                                                                                                                                                             YDLt     �       "   *      	const JOIN_TABLES = array(5�_�                    '       ����                                                                                                                                                                                                                                                                                                                                                             YDLy     �   &   (   *      	);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �          *      	);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �          *      	};5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �         *      	const DEFINITION = array(5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �                `		'separatecheck' => array('table' => 'invoices', 'col' => 'separatecheck', 'type' => 'boolean')�                q		'vendorchangeofaddress' => array('table' => 'invoices', 'col' => 'vendorchangeofaddress', 'type' => 'boolean'),�                ]		'returncheck' => array('table' => 'invoices', 'col' => 'returncheck', 'type' => 'boolean'),�                [		'remittance' => array('table' => 'invoices', 'col' => 'remittance', 'type' => 'boolean'),�                X		'fromemail' => array('table' => 'invoices', 'col' => 'fromemail', 'type' => 'string'),�                V//		'pdfdept' => array('table' => 'invoices', 'col' => 'pdfdept', 'type' => 'string'),�                Y		'accrualcode' => array('table' => 'accrualcodes', 'col' => 'code', 'type' => 'string'),�                `		'accrualcodeid' => array('table' => 'invoices', 'col' => 'accrualcodeid', 'type' => 'number'),�                Z		'paymentdate' => array('table' => 'invoices', 'col' => 'paymentdate', 'type' => 'date'),�                Y		'processed' => array('table' => 'invoices', 'col' => 'processed', 'type' => 'boolean'),�                V		'filename' => array('table' => 'invoices', 'col' => 'filename', 'type' => 'string'),�                Z//		'pdfvendor' => array('table' => 'invoices', 'col' => 'pdfvendor', 'type' => 'string'),�                Y		'designation' => array('table' => 'designations', 'col' => 'name', 'type' => 'string'),�                `		'designationid' => array('table' => 'invoices', 'col' => 'designationid', 'type' => 'number'),�                V		'ponumber' => array('table' => 'invoices', 'col' => 'ponumber', 'type' => 'number'),�                V		'emaildate' => array('table' => 'invoices', 'col' => 'emaildate', 'type' => 'date'),�                N		'added' => array('table' => 'invoices', 'col' => 'added', 'type' => 'date'),�                T		'modified' => array('table' => 'invoices', 'col' => 'modified', 'type' => 'date'),�                L		'date' => array('table' => 'invoices', 'col' => 'date', 'type' => 'date'),�   
             P		'total' => array('table' => 'invoices', 'col' => 'total', 'type' => 'number'),�   	             Q		'dept' => array('table' => 'departments', 'col' => 'name', 'type' => 'string'),�      
          R		'deptid' => array('table' => 'invoices', 'col' => 'deptid', 'type' => 'number'),�      	          O		'vendor' => array('table' => 'vendors', 'col' => 'name', 'type' => 'string'),�                V		'vendorid' => array('table' => 'invoices', 'col' => 'vendorid', 'type' => 'number'),�                L		'num' => array('table' => 'invoices', 'col' => 'num', 'type' => 'string'),�                X		'invoiceid' => array('table' => 'invoices', 'col' => 'invoiceid', 'type' => 'number'),5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �                l		'vendorchangeofaddress' => ['table' => 'invoices', 'col' => 'vendorchangeofaddress', 'type' => 'boolean'),�                X		'returncheck' => ['table' => 'invoices', 'col' => 'returncheck', 'type' => 'boolean'),�                V		'remittance' => ['table' => 'invoices', 'col' => 'remittance', 'type' => 'boolean'),�                S		'fromemail' => ['table' => 'invoices', 'col' => 'fromemail', 'type' => 'string'),�                Q//		'pdfdept' => ['table' => 'invoices', 'col' => 'pdfdept', 'type' => 'string'),�                T		'accrualcode' => ['table' => 'accrualcodes', 'col' => 'code', 'type' => 'string'),�                [		'accrualcodeid' => ['table' => 'invoices', 'col' => 'accrualcodeid', 'type' => 'number'),�                U		'paymentdate' => ['table' => 'invoices', 'col' => 'paymentdate', 'type' => 'date'),�                T		'processed' => ['table' => 'invoices', 'col' => 'processed', 'type' => 'boolean'),�                Q		'filename' => ['table' => 'invoices', 'col' => 'filename', 'type' => 'string'),�                U//		'pdfvendor' => ['table' => 'invoices', 'col' => 'pdfvendor', 'type' => 'string'),�                T		'designation' => ['table' => 'designations', 'col' => 'name', 'type' => 'string'),�                [		'designationid' => ['table' => 'invoices', 'col' => 'designationid', 'type' => 'number'),�                Q		'ponumber' => ['table' => 'invoices', 'col' => 'ponumber', 'type' => 'number'),�                Q		'emaildate' => ['table' => 'invoices', 'col' => 'emaildate', 'type' => 'date'),�                I		'added' => ['table' => 'invoices', 'col' => 'added', 'type' => 'date'),�                O		'modified' => ['table' => 'invoices', 'col' => 'modified', 'type' => 'date'),�                G		'date' => ['table' => 'invoices', 'col' => 'date', 'type' => 'date'),�   
             K		'total' => ['table' => 'invoices', 'col' => 'total', 'type' => 'number'),�   	             L		'dept' => ['table' => 'departments', 'col' => 'name', 'type' => 'string'),�      
          M		'deptid' => ['table' => 'invoices', 'col' => 'deptid', 'type' => 'number'),�      	          J		'vendor' => ['table' => 'vendors', 'col' => 'name', 'type' => 'string'),�                Q		'vendorid' => ['table' => 'invoices', 'col' => 'vendorid', 'type' => 'number'),�                G		'num' => ['table' => 'invoices', 'col' => 'num', 'type' => 'string'),�                S		'invoiceid' => ['table' => 'invoices', 'col' => 'invoiceid', 'type' => 'number'),5�_�                       Z    ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �         *      [		'separatecheck' => ['table' => 'invoices', 'col' => 'separatecheck', 'type' => 'boolean')5�_�                       =    ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �         *    �         *    5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDL�     �         /    5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YDM     �      
   0    �      	   0    5�_�                    .       ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   .   7   1    �   .   /   1    5�_�                    .       ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   .   0   9    5�_�                     0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      1	private static function changeDateFormat($date){5�_�      !               0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      0	private tatic function changeDateFormat($date){5�_�       "           !   0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      /	private atic function changeDateFormat($date){5�_�   !   #           "   0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      .	private tic function changeDateFormat($date){5�_�   "   $           #   0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      -	private ic function changeDateFormat($date){5�_�   #   %           $   0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      ,	private c function changeDateFormat($date){5�_�   $   &           %   0   	    ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   /   1   :      +	private  function changeDateFormat($date){5�_�   %   '           &   7       ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   7   =   :    �   7   8   :    5�_�   &   (           '   7       ����                                                                                                                                                                                                                                                                                                                                                             YDM�     �   7   9   ?    5�_�   '   )           (   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      *	private static function validDate($date){5�_�   (   *           )   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      )	private tatic function validDate($date){5�_�   )   +           *   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      (	private atic function validDate($date){5�_�   *   ,           +   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      '	private tic function validDate($date){5�_�   +   -           ,   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      &	private ic function validDate($date){5�_�   ,   .           -   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�     �   8   :   @      %	private c function validDate($date){5�_�   -   /           .   9   	    ����                                                                                                                                                                                                                                                                                                                                                             YDN�    �   8   :   @      $	private  function validDate($date){5�_�   .   0           /   .       ����                                                                                                                                                                                                                                                                                                                                                             YG��     �   .   �   @    �   .   /   @    5�_�   /   1           0   �       ����                                                                                                                                                                                                                                                                                                                                                             YG�U     �   �   �   �    �   �   �   �    5�_�   0   3           1   �       ����                                                                                                                                                                                                                                                                                                                                                             YG�W     �   �   �   �    5�_�   1       2       3   (       ����                                                                                                                                                                                                                                                                                                                                                             YG�=    �   '   )   �      	const JOIN_TABLES = [5�_�   1           3   2   4       ����                                                                                                                                                                                                                                                                                                                                                             YG��     �   3   5   �      Q	* allowing you to simply pass this function, $_GET or $_POST with proper keys to5��