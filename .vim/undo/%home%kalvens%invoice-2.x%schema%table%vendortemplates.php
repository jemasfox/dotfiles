Vim�UnDo� _%�m��nmv��zy:��Z���c�5b�r�X#   	   C$obj->AddPrimaryKey('vendortemplates_pkey', 'bendortemplateid', 1);      -                       Y��    _�                            ����                                                                                                                                                                                                                                                                                                                                                             Y�F     �         
      '$obj->AddIdentity('invoicetemplateid');5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             Y�K     �         
      E$obj->AddPrimaryKey('invoicetemplates_pkey', 'invoicetemplateid', 1);5�_�                       4    ����                                                                                                                                                                                                                                                                                                                                                             Y�O     �         
      D$obj->AddPrimaryKey('vendortemplates_pkey', 'invoicetemplateid', 1);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             Y�T     �      	   
      Z$obj->AddForeignKey('fk_invoicetemplates_vendorid', 'vendors', 'vendorid', 'vendorid', 1);5�_�                    	       ����                                                                                                                                                                                                                                                                                                                                                             Y�^    �      	          =//$obj->AddUniqueKey('invoicetemplates_name_key', 'name', 1);5�_�                        -    ����                                                                                                                                                                                                                                                                                                                                                             Y��    �         	      C$obj->AddPrimaryKey('vendortemplates_pkey', 'bendortemplateid', 1);5��