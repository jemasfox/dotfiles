Vim�UnDo� �\�Ⱦe�_l�[�a),�;9)ڳ����SS��   	           2                       YK�=    _�                             ����                                                                                                                                                                                                                                                                                                                                                             YD�     �                   �               5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             YD�     �                  5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YD�     �               	 * Gets all accounts5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YD�     �               class AccountModel {5�_�                    
        ����                                                                                                                                                                                                                                                                                                                                                             YD�     �   	            5		$sql = 'SELECT * FROM accounts ORDER BY accountid';5�_�                   
       ����                                                                                                                                                                                                                                                                                                                                                             YD�     �   	            -		$sql = 'SELECT * FROM  ORDER BY accountid';5�_�      	              
   %    ����                                                                                                                                                                                                                                                                                                                                                             YD�     �   	            B		$sql = 'SELECT * FROM distribution formula  ORDER BY accountid';5�_�      
           	   
   ?    ����                                                                                                                                                                                                                                                                                                                                                             YD     �   	            A		$sql = 'SELECT * FROM distributionformula  ORDER BY accountid';5�_�   	              
          ����                                                                                                                                                                                                                                                                                                                                                             YD     �               			$c = new Account();5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                             YD6    �               			$c = new Distribution();5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V       YK�k     �                	/**   !	 * Gets all Distrubtion Formulas   	 *   U	 * @return mixed[] Array of Associative arrays of all the fields of all the vendors.   	 */   "	public static function getAll() {   		$r = array();   F		$sql = 'SELECT * FROM distributionformula  ORDER BY distributionid';   4		$set = App::$conn->db_open_recordset_object($sql);   		while($set->fetch_row()) {   "			$c = new DistributionFormula();   			$c->loadByRowSet($set);   			$r[$c->id] = $c;   		}   		return $r;   	}5�_�                           ����                                                                                                                                                                                                                                                                                                                                                V       YK�l     �                class DistributionFormulaModel {5�_�                       0    ����                                                                                                                                                                                                                                                                                                                                                V       YK�w     �             �             5�_�                          ����                                                                                                                                                                                                                                                                                                                                                V       YK�z     �             5�_�                          ����                                                                                                                                                                                                                                                                                                                                                V       YKӃ     �      	   	    5�_�                           ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӇ     �         
      		$this->table = 'invoices';5�_�                          ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӒ     �         
      		$this->table = '';5�_�                           ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӛ    �         
      '		$this->table = 'distributionFormula';5�_�                       2    ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӤ     �         
      2class DistributionFormulaModel extends TableModel{5�_�                       3    ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӦ     �         
      3class DistributionFormulaModel extends TableModel{ 5�_�                       1    ����                                                                                                                                                                                                                                                                                                                            	          	          V       YKӦ    �         
      2class DistributionFormulaModel extends TableModel{5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             YK�<    �                 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                V       YKӏ     �              5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V       YK�|     �         	      1`5�_�                           ����                                                                                                                                                                                                                                                                                                                                                V       YK�x     �               !	opublic function __construct() {5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             YD�     �              5��